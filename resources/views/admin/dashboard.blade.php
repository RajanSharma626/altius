@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="hk-pg-wrapper mt-3">
        <div class="container-fluid py-3 px-4">
            <div class="row g-3 mb-3 mt-3">
                <div class="col-xxl-12 col-lg-12">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden welcome-card">
                        <div class="card-body p-4">
                            <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                                <div>
                                    <h3 class="fw-bold mb-1">Welcome back, {{ auth()->user()->name }}</h3>
                                    <p class="text-muted mb-0">Monitor platform activity and keep investor onboarding agile.
                                    </p>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="text-center">
                                        <p class="metric-title mb-1">Pending approvals</p>
                                        <p class="metric-number text-primary mb-0">14</p>
                                        <small class="text-muted">Across investors</small>
                                    </div>
                                    <div class="metric-divider"></div>
                                    <div class="text-center">
                                        <p class="metric-title mb-1">Closed deals (QTD)</p>
                                        <p class="metric-number text-success mb-0">₹ 12.6 Cr</p>
                                        <small class="text-muted">Across 8 mandates</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-3">
                <div class="col-xl-12">
                    <div class="card hk-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">Recent investor submissions</h5>
                                <small class="text-muted">Last 24 hours</small>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">View all</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Submission</th>
                                            <th>Status</th>
                                            <th>Submitted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Roshni Patel</td>
                                            <td>KYC documents</td>
                                            <td><span class="badge bg-success-subtle text-success">Auto verified</span></td>
                                            <td>20 min ago</td>
                                        </tr>
                                        <tr>
                                            <td>Vivek Sharma</td>
                                            <td>Bank details update</td>
                                            <td><span class="badge bg-warning-subtle text-warning">Needs review</span></td>
                                            <td>2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>Aparna Bose</td>
                                            <td>Demat linkage</td>
                                            <td><span class="badge bg-primary-subtle text-primary">Queued</span></td>
                                            <td>6 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>Harsh Sinha</td>
                                            <td>Investor questionnaire</td>
                                            <td><span class="badge bg-info-subtle text-info">In progress</span></td>
                                            <td>8 hours ago</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
