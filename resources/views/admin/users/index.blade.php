@extends('admin.layouts.app')

@section('title', 'User Management')

@section('content')
    <div class="hk-pg-wrapper mt-3">
        <div class="container-fluid py-3 px-4">
            <div class="hk-pg-header d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h3 class="hk-pg-title mb-1">User Management</h3>
                    <p class="mb-0 text-muted">Monitor every investor account across the platform.</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.users.pending') }}" class="btn btn-outline-primary btn-sm">
                        Pending approvals
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="EmpTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Approved on</th>
                                    <th>Approver</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $users->firstItem() + $loop->index }}</td>
                                        <td class="fw-semibold">{{ $user->full_name ?? $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->status === 'approved')
                                                <span class="badge bg-success-subtle text-success">Approved</span>
                                            @elseif($user->status === 'pending')
                                                <span class="badge bg-warning-subtle text-warning">Pending</span>
                                            @else
                                                <span class="badge bg-danger-subtle text-danger">Rejected</span>
                                            @endif
                                        </td>
                                        <td>{{ optional($user->approved_at)->format('d M Y H:i') ?? '—' }}</td>
                                        <td>{{ optional($user->approver)->name ?? '—' }}</td>
                                        <td>
                                            <a href="{{ route('admin.users.review', $user) }}" class="btn btn-sm btn-outline-primary">
                                                Review
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted py-4">No users found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

