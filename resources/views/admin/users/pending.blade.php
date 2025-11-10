@extends('admin.layouts.app')

@section('title', 'Pending Approvals')

@section('content')
    <div class="hk-pg-wrapper mt-3">
        <div class="container-fluid py-3 px-4">
            <div class="hk-pg-header d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h3 class="hk-pg-title mb-1">Pending Approvals</h3>
                    <p class="mb-0 text-muted">Review investor submissions awaiting compliance sign-off.</p>
                </div>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> All users
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Submitted</th>
                                    <th>Documents</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pendingUsers as $user)
                                    <tr>
                                        <td>{{ $pendingUsers->firstItem() + $loop->index }}</td>
                                        <td class="fw-semibold">{{ $user->full_name ?? $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('d M Y, H:i') }}</td>
                                        <td>
                                            <span class="badge bg-primary-subtle text-primary">
                                                {{ $user->documents->count() }} uploaded
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.users.review', $user) }}" class="btn btn-sm btn-primary">
                                                Review
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4">No pending approvals.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $pendingUsers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

