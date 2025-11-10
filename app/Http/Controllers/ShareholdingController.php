<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class ShareholdingController extends Controller
{
    public function index(Request $request)
    {
        $companies = Company::orderBy('name')
            ->get(['id', 'name', 'short_name', 'avatar_letter', 'isin']);

        if ($companies->isEmpty()) {
            return view('shareholdings', [
                'companies' => $companies,
                'company' => null,
                'shareholders' => collect(),
            ]);
        }

        $selectedId = $request->integer('company');

        $company = $selectedId
            ? Company::with('shareholders')->find($selectedId)
            : null;

        if (! $company) {
            $company = Company::with('shareholders')->find($companies->first()->id);
        }

        $shareholders = $company->shareholders;

        return view('shareholdings', compact('companies', 'company', 'shareholders'));
    }
}

