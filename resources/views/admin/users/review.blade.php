@extends('admin.layouts.app')

@section('title', 'Review User')

@section('content')
    <div class="hk-pg-wrapper mt-3">
        <div class="container-fluid py-3 px-4">
            <div class="hk-pg-header d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h3 class="hk-pg-title mb-1">Review Investor</h3>
                    <p class="mb-0 text-muted">Inspect KYC, bank and demat information before approval.</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-arrow-left me-1"></i> Back
                    </a>
                    <a href="{{ route('admin.users.pending') }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-list me-1"></i> Pending list
                    </a>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">{{ $user->full_name ?? $user->name }}</h5>
                                <small class="text-muted">{{ $user->email }}</small>
                            </div>
                            <span
                                class="badge {{ $user->status === 'pending' ? 'bg-warning-subtle text-warning' : 'bg-success-subtle text-success' }}">
                                {{ ucfirst($user->status) }}
                            </span>
                        </div>
                        <div class="card-body">
                            <h6 class="fw-semibold mb-2">Basic profile</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">Mobile</p>
                                    <p class="fw-medium">{{ $user->mobile_no ?? '—' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">PAN</p>
                                    <p class="fw-medium text-uppercase">{{ $user->pan_no ?? '—' }}</p>
                                </div>
                                <div class="col-12">
                                    <p class="mb-1 text-muted small">Address</p>
                                    <p class="fw-medium">{{ $user->address ?? '—' }}</p>
                                </div>
                            </div>
                            <hr>
                            <h6 class="fw-semibold mb-2">Demat</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">DP ID</p>
                                    <p class="fw-medium">{{ optional($user->dematDetails)->dp_id ?? '—' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">Client ID</p>
                                    <p class="fw-medium">{{ optional($user->dematDetails)->client_id ?? '—' }}</p>
                                </div>
                            </div>
                            <hr>
                            <h6 class="fw-semibold mb-2">Bank</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">Bank</p>
                                    <p class="fw-medium">{{ optional($user->bankDetails)->bank_name ?? '—' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">Account</p>
                                    <p class="fw-medium">{{ optional($user->bankDetails)->account_no ?? '—' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted small">IFSC</p>
                                    <p class="fw-medium">{{ optional($user->bankDetails)->ifsc_code ?? '—' }}</p>
                                </div>
                            </div>
                            <hr>
                            <h6 class="fw-semibold mb-2">Documents</h6>
                            <ul class="list-group list-group-flush">
                                @forelse($user->documents as $document)
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <p class="mb-1 fw-semibold">{{ ucfirst($document->type) }}</p>
                                            <small
                                                class="text-muted">{{ $document->created_at->format('d M Y, H:i') }}</small>
                                        </div>
                                        <a href="{{ $document->url ?? '#' }}" target="_blank"
                                            class="btn btn-sm btn-outline-primary">
                                            View
                                        </a>
                                    </li>
                                @empty
                                    <li class="list-group-item px-0 text-muted">No documents supplied.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h6 class="mb-0">Approve user</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.users.approve', $user) }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="approval_notes" class="form-label small text-muted">Approval notes
                                        (optional)</label>
                                    <textarea name="approval_notes" id="approval_notes" rows="3" class="form-control"
                                        placeholder="Add internal note..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-success w-100">Approve user</button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0 text-danger">Reject user</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.users.reject', $user) }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="rejection_reason" class="form-label small text-muted">Rejection reason
                                        *</label>
                                    <textarea name="rejection_reason" id="rejection_reason" rows="3"
                                        class="form-control @error('rejection_reason') is-invalid @enderror" required
                                        placeholder="Detail the reason for rejection"></textarea>
                                    @error('rejection_reason')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-outline-danger w-100">Reject user</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
