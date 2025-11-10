@php
    $shareholders = old('shareholder_names')
        ? collect(old('shareholder_names'))->map(function ($name, $index) {
            return (object) [
                'name' => $name,
                'holding_percentage' => old('shareholder_percentages')[$index] ?? null,
                'category' => old('shareholder_categories')[$index] ?? null,
                'display_order' => old('shareholder_orders')[$index] ?? $index,
            ];
        })
        : $company->shareholders ?? collect();
@endphp

<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label fw-semibold">Company Name <span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $company->name) }}" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Short Name</label>
        <input type="text" name="short_name" class="form-control"
            value="{{ old('short_name', $company->short_name) }}">
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Ticker</label>
        <input type="text" name="ticker" class="form-control" value="{{ old('ticker', $company->ticker) }}">
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Listing Status</label>
        <input type="text" name="listing_status" class="form-control"
            value="{{ old('listing_status', $company->listing_status) }}">
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Avatar Letter</label>
        <input type="text" name="avatar_letter" class="form-control"
            value="{{ old('avatar_letter', $company->avatar_letter) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Logo URL</label>
        <input type="url" name="logo_url" class="form-control" value="{{ old('logo_url', $company->logo_url) }}">
    </div>
    <div class="col-md-3">
        <label class="form-label fw-semibold">ISIN</label>
        <input type="text" name="isin" class="form-control" value="{{ old('isin', $company->isin) }}">
    </div>
    <div class="col-md-3">
        <label class="form-label fw-semibold">PAN</label>
        <input type="text" name="pan" class="form-control" value="{{ old('pan', $company->pan) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $company->email) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $company->phone) }}">
    </div>
    <div class="col-12">
        <label class="form-label fw-semibold">Address</label>
        <textarea name="address" class="form-control" rows="2">{{ old('address', $company->address) }}</textarea>
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Date of Incorporation</label>
        <input type="date" name="date_of_incorporation" class="form-control"
            value="{{ old('date_of_incorporation', optional($company->date_of_incorporation)->format('Y-m-d')) }}">
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Date of Last AGM</label>
        <input type="date" name="last_agm_date" class="form-control"
            value="{{ old('last_agm_date', optional($company->last_agm_date)->format('Y-m-d')) }}">
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Data as of</label>
        <input type="date" name="data_as_of" class="form-control"
            value="{{ old('data_as_of', optional($company->data_as_of)->format('Y-m-d')) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Source of Data</label>
        <input type="text" name="source_of_data" class="form-control"
            value="{{ old('source_of_data', $company->source_of_data) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Industry</label>
        <input type="text" name="industry" class="form-control" value="{{ old('industry', $company->industry) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Company Type</label>
        <input type="text" name="company_type" class="form-control"
            value="{{ old('company_type', $company->company_type) }}">
    </div>
    <div class="col-md-3">
        <label class="form-label fw-semibold">Founded Year</label>
        <input type="text" name="founded_year" class="form-control"
            value="{{ old('founded_year', $company->founded_year) }}">
    </div>
    <div class="col-12">
        <label class="form-label fw-semibold">Registered Address</label>
        <textarea name="registered_address" class="form-control" rows="2">{{ old('registered_address', $company->registered_address) }}</textarea>
    </div>
    <div class="col-12">
        <label class="form-label fw-semibold">About Summary</label>
        <textarea name="about_summary" class="form-control" rows="3">{{ old('about_summary', $company->about_summary) }}</textarea>
    </div>
    <div class="col-12">
        <label class="form-label fw-semibold">Overview Body</label>
        <textarea name="overview_body" class="form-control" rows="5">{{ old('overview_body', $company->overview_body) }}</textarea>
    </div>
    <div class="col-12">
        <label class="form-label fw-semibold">Business Overview</label>
        <textarea name="business_overview" class="form-control" rows="6">{{ old('business_overview', $company->business_overview) }}</textarea>
    </div>
</div>

<hr class="my-4">

<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h5 class="mb-0">Shareholding Details</h5>
            <p class="text-muted small mb-0">Add the shareholders and their holding percentages for the ownership chart.</p>
        </div>
        <button type="button" class="btn btn-outline-primary btn-sm" id="add-shareholder-row">
            <i class="bi bi-plus-lg me-1"></i>Add Shareholder
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-sm align-middle" id="shareholders-table">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Holding (%)</th>
                    <th>Category</th>
                    <th>Order</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($shareholders as $index => $shareholder)
                    <tr>
                        <td>
                            <input type="text" name="shareholder_names[]" class="form-control"
                                value="{{ $shareholder->name }}">
                        </td>
                        <td>
                            <input type="number" step="0.01" name="shareholder_percentages[]" class="form-control"
                                value="{{ $shareholder->holding_percentage }}">
                        </td>
                        <td>
                            <input type="text" name="shareholder_categories[]" class="form-control"
                                value="{{ $shareholder->category }}">
                        </td>
                        <td style="max-width: 80px;">
                            <input type="number" name="shareholder_orders[]" class="form-control"
                                value="{{ $shareholder->display_order ?? $index }}">
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-outline-danger remove-shareholder-row">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr class="shareholder-empty-state">
                        <td colspan="5" class="text-center text-muted py-3">No shareholders added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tableBody = document.querySelector('#shareholders-table tbody');
            const addBtn = document.querySelector('#add-shareholder-row');

            function addRow(data = {}) {
                const emptyState = tableBody.querySelector('.shareholder-empty-state');
                if (emptyState) {
                    emptyState.remove();
                }

                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>
                        <input type="text" name="shareholder_names[]" class="form-control" value="${data.name ?? ''}">
                    </td>
                    <td>
                        <input type="number" step="0.01" name="shareholder_percentages[]" class="form-control" value="${data.holding_percentage ?? ''}">
                    </td>
                    <td>
                        <input type="text" name="shareholder_categories[]" class="form-control" value="${data.category ?? ''}">
                    </td>
                    <td style="max-width:80px;">
                        <input type="number" name="shareholder_orders[]" class="form-control" value="${data.display_order ?? tableBody.children.length}">
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-shareholder-row">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </td>
                `;
                tableBody.appendChild(tr);
            }

            addBtn?.addEventListener('click', () => addRow());

            tableBody.addEventListener('click', function(event) {
                if (event.target.closest('.remove-shareholder-row')) {
                    const row = event.target.closest('tr');
                    row.remove();

                    if (tableBody.children.length === 0) {
                        const emptyRow = document.createElement('tr');
                        emptyRow.classList.add('shareholder-empty-state');
                        emptyRow.innerHTML =
                            '<td colspan="5" class="text-center text-muted py-3">No shareholders added yet.</td>';
                        tableBody.appendChild(emptyRow);
                    }
                }
            });
        });
    </script>
@endpush

