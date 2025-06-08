@extends('layouts.app')

@section('title', 'Refer and Earn')

@section('content')
    <div class="container-fluid p-0">
        <!-- Header Banner -->
        <div class="bg-warning bg-opacity-25 p-4 border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="text-primary fw-bold mb-2">Invite and Earn</h2>
                        <p class="text-muted mb-0">Get ₹500 for every successful referral</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <img src="/placeholder.svg?height=120&width=200" alt="Referral Illustration" class="img-fluid">
                        <div class="mt-2">
                            <small><a href="#" class="text-danger text-decoration-none">Terms &
                                    Conditions*</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <!-- Social Sharing Buttons -->
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <button class="btn btn-success w-100 py-3 d-flex align-items-center justify-content-center">
                        <i class="fab fa-whatsapp fa-2x me-3"></i>
                        <span class="fw-semibold">Share on WhatsApp</span>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="btn btn-primary w-100 py-3 d-flex align-items-center justify-content-center">
                        <i class="fas fa-copy fa-2x me-3"></i>
                        <span class="fw-semibold">Copy Link</span>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="btn btn-info w-100 py-3 d-flex align-items-center justify-content-center">
                        <i class="fab fa-twitter fa-2x me-3"></i>
                        <span class="fw-semibold">Share on Twitter</span>
                    </button>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row mb-4">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted mb-2">Referral Code</h6>
                            <h4 class="text-primary fw-bold">FNZF16JO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted mb-2">Referrals Done</h6>
                            <h4 class="text-primary fw-bold">0/20</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted mb-2">Total Rewards Earned</h6>
                            <h4 class="text-success fw-bold">₹0.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted mb-2">Current Balance</h6>
                            <h4 class="text-success fw-bold">₹0.00</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Section -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title mb-1">Sign up Status</h6>
                                    <p class="text-muted mb-0">No data found</p>
                                </div>
                                <i class="fas fa-user-plus fa-2x text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title mb-1">Transaction History</h6>
                                    <p class="text-muted mb-0">No data found</p>
                                </div>
                                <i class="fas fa-history fa-2x text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="alert alert-info border-0">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-info-circle fa-2x me-3"></i>
                            <div>
                                <h6 class="alert-heading mb-1">How it works</h6>
                                <p class="mb-0">Share your referral code with friends. When they sign up and complete
                                    their first investment, you both earn ₹500!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
