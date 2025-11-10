<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CompanyController extends Controller
{
    protected array $csvColumns = [
        'name' => 'Company Name',
        'short_name' => 'Short Name',
        'ticker' => 'Ticker',
        'listing_status' => 'Listing Status',
        'avatar_letter' => 'Avatar Letter',
        'logo_url' => 'Logo URL',
        'isin' => 'ISIN',
        'pan' => 'PAN',
        'email' => 'Email',
        'phone' => 'Phone',
        'address' => 'Address',
        'date_of_incorporation' => 'Date of Incorporation (YYYY-MM-DD)',
        'last_agm_date' => 'Date of Last AGM (YYYY-MM-DD)',
        'data_as_of' => 'Data as of (YYYY-MM-DD)',
        'source_of_data' => 'Source of Data',
        'company_type' => 'Company Type',
        'industry' => 'Industry',
        'founded_year' => 'Founded Year',
        'registered_address' => 'Registered Address',
        'about_summary' => 'About Summary',
        'overview_body' => 'Overview Body',
        'business_overview' => 'Business Overview',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::orderBy('name')->paginate(20);

        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = new Company();

        return view('admin.companies.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validatedData($request);

        DB::transaction(function () use ($data, $request) {
            $company = Company::create($data);
            $this->syncShareholders($company, $request);
        });

        return redirect()
            ->route('admin.companies.index')
            ->with('status', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return redirect()->route('admin.companies.edit', $company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        $company->load('shareholders');

        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $data = $this->validatedData($request);

        DB::transaction(function () use ($data, $request, $company) {
            $company->update($data);
            $this->syncShareholders($company, $request);
        });

        return redirect()
            ->route('admin.companies.index')
            ->with('status', 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()
            ->route('admin.companies.index')
            ->with('status', 'Company deleted successfully.');
    }

    public function export(): StreamedResponse
    {
        $columns = $this->csvColumns;

        $response = new StreamedResponse(function () use ($columns) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, array_values($columns));

            Company::orderBy('name')->chunk(200, function ($companies) use ($handle, $columns) {
                foreach ($companies as $company) {
                    $row = [];
                    foreach ($columns as $attribute => $header) {
                        $value = $company->{$attribute};
                        if ($value instanceof \Carbon\Carbon) {
                            $value = $value->format('Y-m-d');
                        }
                        $row[] = $value;
                    }
                    fputcsv($handle, $row);
                }
            });

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set(
            'Content-Disposition',
            'attachment; filename=companies_' . now()->format('Ymd_His') . '.csv'
        );

        return $response;
    }

    public function downloadTemplate(): StreamedResponse
    {
        $columns = $this->csvColumns;

        $response = new StreamedResponse(function () use ($columns) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, array_values($columns));

            fputcsv($handle, [
                'Apollo Green Energy Limited',
                'Apollo Green',
                'APOLLO',
                'DRHP Not Filed',
                'A',
                'https://example.com/logo.png',
                'INE838A01015',
                'AACAA1234A',
                'info@example.com',
                '+91-1246-740200',
                'Office No. 303, Third Floor, DLF Courtyard, Saket, New Delhi, 110017',
                '1994-08-25',
                '2024-12-30',
                '2025-04-25',
                'Probe',
                'Public Limited',
                'Renewable Energy',
                '1994',
                'New Delhi, India',
                'Leading renewable energy player with diversified operations.',
                'Apollo Green Energy Limited is a leading name in India\'s renewable energy sector...',
                'Green Energy Division: Provides end-to-end solutions for renewable energy projects...',
            ]);

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set(
            'Content-Disposition',
            'attachment; filename=companies_template.csv'
        );

        return $response;
    }

    public function import(Request $request)
    {
        $request->validate([
            'csv_file' => ['required', 'file', 'mimes:csv,txt', 'max:10240'],
        ]);

        $uploaded = $request->file('csv_file')->getRealPath();
        $handle = fopen($uploaded, 'r');

        if (! $handle) {
            return back()->withErrors(['csv_file' => 'Unable to read uploaded file.']);
        }

        $headerRow = fgetcsv($handle);
        if (! $headerRow) {
            fclose($handle);
            return back()->withErrors(['csv_file' => 'CSV file is empty.']);
        }

        $columns = $this->csvColumns;
        $headerToAttribute = [];
        foreach ($headerRow as $index => $label) {
            $label = trim($label);
            $attribute = array_search($label, $columns, true);
            if ($attribute !== false) {
                $headerToAttribute[$index] = $attribute;
            }
        }

        if (empty($headerToAttribute)) {
            fclose($handle);
            return back()->withErrors(['csv_file' => 'CSV headers do not match the expected template.']);
        }

        $imported = 0;
        $updated = 0;

        DB::transaction(function () use ($handle, $headerToAttribute, &$imported, &$updated) {
            while (($row = fgetcsv($handle)) !== false) {
                if (! array_filter($row)) {
                    continue;
                }

                $data = [];
                foreach ($headerToAttribute as $index => $attribute) {
                    $value = $row[$index] ?? null;
                    $value = $value !== null ? trim($value) : null;

                    if (in_array($attribute, ['date_of_incorporation', 'last_agm_date', 'data_as_of'], true)) {
                        if ($value) {
                            try {
                                $data[$attribute] = \Carbon\Carbon::parse($value)->format('Y-m-d');
                            } catch (\Exception $e) {
                                $data[$attribute] = null;
                            }
                        } else {
                            $data[$attribute] = null;
                        }
                    } else {
                        $data[$attribute] = $value ?: null;
                    }
                }

                if (empty($data['name'])) {
                    continue;
                }

                $uniqueKey = ! empty($data['isin'])
                    ? ['isin' => $data['isin']]
                    : ['name' => $data['name']];

                $company = Company::updateOrCreate($uniqueKey, $data);

                if ($company->wasRecentlyCreated) {
                    $imported++;
                } else {
                    $updated++;
                }
            }

            fclose($handle);
        });

        return redirect()
            ->route('admin.companies.index')
            ->with('status', "Import complete. {$imported} added, {$updated} updated.");
    }

    protected function validatedData(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'short_name' => ['nullable', 'string', 'max:100'],
            'ticker' => ['nullable', 'string', 'max:100'],
            'listing_status' => ['nullable', 'string', 'max:255'],
            'logo_url' => ['nullable', 'url'],
            'avatar_letter' => ['nullable', 'string', 'max:5'],
            'isin' => ['nullable', 'string', 'max:50'],
            'pan' => ['nullable', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'address' => ['nullable', 'string', 'max:500'],
            'date_of_incorporation' => ['nullable', 'date'],
            'last_agm_date' => ['nullable', 'date'],
            'data_as_of' => ['nullable', 'date'],
            'source_of_data' => ['nullable', 'string', 'max:255'],
            'company_type' => ['nullable', 'string', 'max:255'],
            'industry' => ['nullable', 'string', 'max:255'],
            'founded_year' => ['nullable', 'string', 'max:10'],
            'registered_address' => ['nullable', 'string', 'max:500'],
            'about_summary' => ['nullable', 'string'],
            'overview_body' => ['nullable', 'string'],
            'business_overview' => ['nullable', 'string'],
            'shareholder_names' => ['nullable', 'array'],
            'shareholder_names.*' => ['nullable', 'string', 'max:255'],
            'shareholder_percentages' => ['nullable', 'array'],
            'shareholder_percentages.*' => ['nullable', 'numeric', 'between:0,100'],
            'shareholder_categories' => ['nullable', 'array'],
            'shareholder_categories.*' => ['nullable', 'string', 'max:100'],
            'shareholder_orders' => ['nullable', 'array'],
            'shareholder_orders.*' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    protected function syncShareholders(Company $company, Request $request): void
    {
        $names = $request->input('shareholder_names', []);
        $percentages = $request->input('shareholder_percentages', []);
        $categories = $request->input('shareholder_categories', []);
        $orders = $request->input('shareholder_orders', []);

        $company->shareholders()->delete();

        foreach ($names as $index => $name) {
            if (blank($name)) {
                continue;
            }

            $company->shareholders()->create([
                'name' => $name,
                'holding_percentage' => $percentages[$index] ?? null,
                'category' => $categories[$index] ?? null,
                'display_order' => $orders[$index] ?? $index,
            ]);
        }
    }
}
