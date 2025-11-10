@extends('admin.layouts.app')

@section('title', 'Add Company')

@section('content')
    <div class="hk-pg-wrapper mt-3">
        <div class="container-fluid py-3 px-4">
            <div class="hk-pg-header d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h3 class="hk-pg-title">Add Company</h3>
                    <p class="text-muted small mb-0">Capture the core details that power the investor dashboard.</p>
                </div>
                <a href="{{ route('admin.companies.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Back
                </a>
            </div>

            <form action="{{ route('admin.companies.store') }}" method="POST" class="card border-0 shadow-sm">
                @csrf
                <div class="card-body">
                    @include('admin.companies.partials.form')
                </div>
                <div class="card-footer d-flex justify-content-end gap-2 bg-white">
                    <a href="{{ route('admin.companies.index') }}" class="btn btn-outline-secondary btn-sm">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary btn-sm">
                        Create Company
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

