@extends('layouts.app')

@section('title', 'Shareholdings')

@section('content')
    <div class="min-vh-100 bg-light">
        <header class="bg-white border-bottom py-3">
            <div class="container">
                @if (! $company)
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="h5 mb-0">Shareholdings</h1>
                    </div>
                @else
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center"
                                style="height: 44px; width: 44px;">
                                <span class="text-success fw-semibold small">
                                    {{ $company->avatar_letter ?? strtoupper(substr($company->short_name ?? $company->name, 0, 1)) }}
                                </span>
                            </div>
                            <div>
                                <h1 class="h6 fw-semibold mb-0">{{ $company->name }}</h1>
                                <div class="d-flex align-items-center gap-2 small text-secondary">
                                    @if ($company->isin)
                                        <span>ISIN: {{ $company->isin }}</span>
                                    @endif
                                    @if ($company->listing_status)
                                        <span class="badge bg-primary-subtle text-primary">{{ $company->listing_status }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                                <i class="bi bi-trash3"></i><span>Watchlist</span>
                            </button>
                            <button class="btn btn-outline-secondary btn-sm px-2 py-1"><i class="bi bi-bell"></i></button>
                            @if ($company->source_of_data)
                                <span class="small text-muted">Source: {{ $company->source_of_data }}</span>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </header>

        <main class="container py-4">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4">
                    <div class="shareholding-screener shadow-sm">
                        <div class="shareholding-screener__header">
                            <div class="nav nav-tabs" role="tablist">
                                <button class="nav-link active" type="button">Companies</button>
                            </div>
                            <div class="shareholding-search">
                                <i class="bi bi-search"></i>
                                <input type="text" class="form-control" placeholder="Search Company Name"
                                    oninput="filterCompanies(this.value)">
                            </div>
                        </div>
                        <div class="shareholding-list" id="company-list">
                            @forelse ($companies as $item)
                                <a class="shareholding-list__item {{ $company && $company->id === $item->id ? 'active' : '' }}"
                                    href="{{ route('shareholdings', ['company' => $item->id]) }}">
                                    {{ $item->name }}
                                </a>
                            @empty
                                <p class="text-muted small px-3 py-3 mb-0">No companies available yet.</p>
                            @endforelse
                        </div>
                        <div class="shareholding-screener__footer">
                            <div class="nav nav-pills">
                                <button class="nav-link active" type="button">All Companies</button>
                                <button class="nav-link" type="button" disabled>Watchlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-8">
                    @if (! $company)
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center py-5">
                                <h5 class="fw-semibold mb-1">No company data yet</h5>
                                <p class="text-muted mb-0">Ask an administrator to add company details from the admin panel.</p>
                            </div>
                        </div>
                    @else
                        <div class="shareholding-detail shadow-sm">
                            <div class="shareholding-detail__header">
                                <div class="d-flex flex-column gap-1">
                                    <div class="company-meta gap-3">
                                        @if ($company->email)
                                            <span><i class="bi bi-envelope me-1"></i>{{ $company->email }}</span>
                                        @endif
                                        @if ($company->phone)
                                            <span><i class="bi bi-telephone me-1"></i>{{ $company->phone }}</span>
                                        @endif
                                        @if ($company->founded_year)
                                            <span>Founded {{ $company->founded_year }}</span>
                                        @endif
                                    </div>
                                    @if ($company->about_summary)
                                        <p class="text-muted small mb-0">{{ $company->about_summary }}</p>
                                    @endif
                                </div>
                                @if ($company->ticker)
                                    <span class="badge bg-primary-subtle text-primary align-self-start">Ticker:
                                        {{ $company->ticker }}</span>
                                @endif
                            </div>

                            <div class="row g-4">
                                <div class="col-lg-5">
                                    <div class="shareholding-chart-card">
                                        <div class="chart-ring"
                                            data-values="{{ $shareholders->pluck('holding_percentage')->implode(',') }}">
                                            <div class="chart-ring__center">
                                                {{ $shareholders->first()?->category ?? 'Shareholding' }}
                                            </div>
                                        </div>
                                        <p class="text-muted small mb-0 text-center mt-3">
                                            Ownership split displayed for quick reference
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="shareholding-table-wrapper">
                                        <div class="shareholding-table-header">
                                            <h6 class="mb-0">Shareholder</h6>
                                            <span class="text-muted">Holdings (%)</span>
                                        </div>
                                        <div class="shareholding-table-list">
                                            @forelse ($shareholders as $shareholder)
                                                <div class="shareholding-table-row">
                                                    <span>{{ $shareholder->name }}</span>
                                                    <span class="fw-semibold">{{ number_format($shareholder->holding_percentage ?? 0, 2) }}</span>
                                                </div>
                                            @empty
                                                <div class="shareholding-table-row">
                                                    <span class="text-muted">No shareholder data available.</span>
                                                    <span>—</span>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4 mt-4">
                                <div class="col-lg-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body">
                                            <h6 class="fw-semibold mb-3">Company Facts</h6>
                                            <dl class="row mb-0 small">
                                                @if ($company->isin)
                                                    <dt class="col-sm-5 text-muted">ISIN</dt>
                                                    <dd class="col-sm-7">{{ $company->isin }}</dd>
                                                @endif
                                                @if ($company->pan)
                                                    <dt class="col-sm-5 text-muted">PAN</dt>
                                                    <dd class="col-sm-7">{{ $company->pan }}</dd>
                                                @endif
                                                @if ($company->address)
                                                    <dt class="col-sm-5 text-muted">Address</dt>
                                                    <dd class="col-sm-7">{{ $company->address }}</dd>
                                                @endif
                                                @if ($company->date_of_incorporation)
                                                    <dt class="col-sm-5 text-muted">Incorporated</dt>
                                                    <dd class="col-sm-7">{{ $company->date_of_incorporation->format('d-M-Y') }}</dd>
                                                @endif
                                                @if ($company->last_agm_date)
                                                    <dt class="col-sm-5 text-muted">Last AGM</dt>
                                                    <dd class="col-sm-7">{{ $company->last_agm_date->format('d-M-Y') }}</dd>
                                                @endif
                                                @if ($company->data_as_of)
                                                    <dt class="col-sm-5 text-muted">Data as of</dt>
                                                    <dd class="col-sm-7">{{ $company->data_as_of->format('d-M-Y') }}</dd>
                                                @endif
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body">
                                            <h6 class="fw-semibold mb-3">Company Overview</h6>
                                            <table class="table table-sm mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="text-muted small">Company Type</th>
                                                        <td class="small">{{ $company->company_type ?? '—' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="text-muted small">Industry</th>
                                                        <td class="small">{{ $company->industry ?? '—' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="text-muted small">Registered Address</th>
                                                        <td class="small">{{ $company->registered_address ?? '—' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($company->overview_body)
                                <section class="mt-4">
                                    <h6 class="fw-semibold mb-2">About the Company</h6>
                                    <p class="text-muted small mb-0">{!! nl2br(e($company->overview_body)) !!}</p>
                                </section>
                            @endif

                            @if ($company->business_overview)
                                <section class="mt-4">
                                    <h5 class="fw-semibold text-primary mb-3">Business Overview</h5>
                                    <div class="text-muted small">{!! nl2br(e($company->business_overview)) !!}</div>
                                </section>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </main>
    </div>

    @push('scripts')
        <script>
            function filterCompanies(query) {
                const list = document.querySelectorAll('#company-list .shareholding-list__item');
                const lowerQuery = query.toLowerCase();
                list.forEach((item) => {
                    item.style.display = item.textContent.toLowerCase().includes(lowerQuery) ? '' : 'none';
                });
            }
        </script>
    @endpush
@endsection
