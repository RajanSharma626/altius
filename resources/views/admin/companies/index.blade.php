@extends('admin.layouts.app')

@section('title', 'Companies')

@section('content')
    <div class="hk-pg-wrapper mt-3">
        <div class="container-fluid py-3 px-4">
            <div class="hk-pg-header d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h3 class="hk-pg-title">Companies</h3>
                    <p class="text-muted mb-0 small">Manage company master data used across the investor experience.</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('admin.companies.template') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-file-earmark-arrow-down me-1"></i> CSV Template
                    </a>
                    <a href="{{ route('admin.companies.export') }}" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-download me-1"></i> Export CSV
                    </a>
                    <a href="{{ route('admin.companies.create') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-lg me-1"></i> Add Company
                    </a>
                </div>
            </div>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0 small">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <form action="{{ route('admin.companies.import') }}" method="POST" enctype="multipart/form-data"
                        class="row align-items-end">
                        @csrf
                        <div class="col-md-3">
                            <label class="form-label fw-semibold small text-uppercase">Import Companies via CSV</label>
                            <input type="file" name="csv_file" accept=".csv"
                                class="form-control form-control-sm @error('csv_file') is-invalid @enderror" required>
                            
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="bi bi-upload me-1"></i> Upload &amp; Import
                            </button>
                        </div>
                            <div class="col-12">
                            <div class="form-text">Use the template to bulk add or update company records.</div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">ISIN</th>
                                    <th scope="col">Industry</th>
                                    <th scope="col">Last Updated</th>
                                    <th scope="col" class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
                                    <tr>
                                        <td>
                                            <strong>{{ $company->name }}</strong>
                                            @if ($company->listing_status)
                                                <div class="small text-muted">{{ $company->listing_status }}</div>
                                            @endif
                                        </td>
                                        <td>{{ $company->isin ?? '—' }}</td>
                                        <td>{{ $company->industry ?? '—' }}</td>
                                        <td>{{ $company->updated_at?->format('d M Y') ?? '—' }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('admin.companies.edit', $company) }}"
                                                class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil-square me-1"></i>Edit
                                            </a>
                                            <form action="{{ route('admin.companies.destroy', $company) }}" method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Are you sure you want to delete this company?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash me-1"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">
                                            No companies found. Start by adding one.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                {{ $companies->links() }}
            </div>
        </div>
    </div>
@endsection

