@extends('layouts.app')

@section('title', 'My Account')

@section('content')
@php
    $user = auth()->user();
    $demat = optional($user->dematDetails);
    $bank = optional($user->bankDetails);

    $basicCompleted = filled($user->full_name) && filled($user->pan_no) && filled($user->address) && filled($user->mobile_no);
    $dematCompleted = filled($demat->dp_id) && filled($demat->client_id);
    $bankCompleted = filled($bank->bank_name) && filled($bank->account_no) && filled($bank->ifsc_code);
    $documentsCompleted = false; // hook into document status when available

    $steps = [
        [
            'id' => 'basic',
            'title' => 'Basic Profile',
            'description' => 'Name, contact & address',
            'completed' => $basicCompleted,
        ],
        [
            'id' => 'demat',
            'title' => 'Demat Details',
            'description' => 'DP Id & Client Id',
            'completed' => $dematCompleted,
        ],
        [
            'id' => 'bank',
            'title' => 'Bank Details',
            'description' => 'Bank, account & IFSC',
            'completed' => $bankCompleted,
        ],
        [
            'id' => 'upload',
            'title' => 'Upload Docs',
            'description' => 'Verify ownership instantly',
            'completed' => $documentsCompleted,
        ],
        [
            'id' => 'review',
            'title' => 'Review & Submit',
            'description' => 'Start investing in seconds',
            'completed' => $basicCompleted && $dematCompleted && $bankCompleted && $documentsCompleted,
        ],
    ];

    $completedCount = collect($steps)->where('completed', true)->count();
    $progressPercent = (int) round(($completedCount / max(count($steps), 1)) * 100);
@endphp

<div class="account-layout">
    <section class="account-header">
        <div>
            <h2 class="account-title mb-1">My Account</h2>
            <p class="text-muted mb-0">Complete the checklist to stay investment ready.</p>
        </div>
        <div class="account-header-cta">
            <div>
                <p class="label">Profile progress</p>
                <p class="value">{{ $progressPercent }}%</p>
            </div>
            <div class="divider"></div>
            <div>
                <p class="label">Last login</p>
                <p class="value">{{ now()->format('d M, Y') }}</p>
            </div>
            <a href="mailto:support@altosinvestech.com" class="btn btn-outline-primary btn-pill">Need help?</a>
        </div>
    </section>

    <section class="account-progress">
        @foreach ($steps as $index => $step)
            @php
                $isFirst = $index === 0;
                $previousCompleted = $isFirst ? true : $steps[$index - 1]['completed'];
                $statusClass = $step['completed'] ? 'completed' : ($previousCompleted ? 'active' : 'locked');
            @endphp
            <div class="progress-step {{ $statusClass }}">
                <div class="progress-counter">{{ $index + 1 }}</div>
                <div class="progress-details">
                    <p class="step-title">{{ $step['title'] }}</p>
                    @if ($step['completed'])
                        <span class="step-status text-success"><i class="bi bi-check-circle-fill me-1"></i>Completed</span>
                    @elseif ($statusClass === 'active')
                        <span class="step-status text-primary"><i class="bi bi-circle-half me-1"></i>In progress</span>
                    @else
                        <span class="step-status text-muted"><i class="bi bi-dot me-1"></i>Pending</span>
                    @endif
                </div>
            </div>
        @endforeach
    </section>

    <div class="row g-4">
        <div class="col-xxl-8">
            <div class="account-card">
                <ul class="nav nav-pills account-tabs" id="accountTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fs-14" id="account-basic-tab" data-bs-toggle="pill" data-bs-target="#account-basic" type="button" role="tab">
                            <i class="bi bi-person-badge me-2"></i>Basic Profile
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="account-demat-tab" data-bs-toggle="pill" data-bs-target="#account-demat" type="button" role="tab">
                            <i class="bi bi-safe2-fill me-2"></i>Demat Details
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="account-bank-tab" data-bs-toggle="pill" data-bs-target="#account-bank" type="button" role="tab">
                            <i class="bi bi-bank me-2"></i>Bank Details
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="account-upload-tab" data-bs-toggle="pill" data-bs-target="#account-upload" type="button" role="tab">
                            <i class="bi bi-cloud-arrow-up-fill me-2"></i>Upload Documents
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="account-review-tab" data-bs-toggle="pill" data-bs-target="#account-review" type="button" role="tab">
                            <i class="bi bi-clipboard-check-fill me-2"></i>Review &amp; Submit
                        </button>
                    </li>
                </ul>

                <div class="tab-content account-tab-content" id="accountTabContent">
                    <div class="tab-pane fade show active" id="account-basic" role="tabpanel" aria-labelledby="account-basic-tab">
                        <div class="tab-pane-inner">
                            <div class="tab-heading">
                                <h4 class="tab-title">Your Basic Profile</h4>
                                <p class="tab-subtitle">Keep your core details accurate for compliance and communication.</p>
                            </div>

                            <form method="POST" action="{{ route('profile.update.basic') }}" class="form-grid">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Mobile No. <span class="text-danger">*</span></label>
                                        <div class="row g-2 align-items-center">
                                            <div class="col-4">
                                                <select class="form-select">
                                                    <option>+91</option>
                                                </select>
                                            </div>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <input type="tel" name="mobile_no" class="form-control" value="{{ $user->mobile_no }}">
                                                    <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Full Name (As on PAN) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="full_name" class="form-control" value="{{ $user->full_name ?? $user->name }}">
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">PAN Number <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="pan_no" class="form-control" value="{{ $user->pan_no }}">
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="address" rows="2">{{ $user->address }}</textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                        <select class="form-select" name="nationality">
                                            <option selected>{{ $user->nationality ?? 'Indian' }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button class="btn btn-primary btn-pill">Save &amp; Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="account-demat" role="tabpanel" aria-labelledby="account-demat-tab">
                        <div class="tab-pane-inner">
                            <div class="tab-heading">
                                <h4 class="tab-title">Demat Details</h4>
                                <p class="tab-subtitle">Connect your Demat to settle share transfers smoothly.</p>
                            </div>

                            <form method="POST" action="{{ route('profile.update.demat') }}" class="form-grid">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">DP Id <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="dp_id" class="form-control" value="{{ $demat->dp_id }}">
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Client Id <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="client_id" class="form-control" value="{{ $demat->client_id }}">
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="alert alert-info border-0 account-hint" role="alert">
                                            <strong>Your Demat Account Number</strong> = DP ID (first 8 characters) + Client ID (last 8 digits). Need help? <a href="#" class="alert-link">View guide</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button class="btn btn-primary btn-pill">Save &amp; Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="account-bank" role="tabpanel" aria-labelledby="account-bank-tab">
                        <div class="tab-pane-inner">
                            <div class="tab-heading">
                                <h4 class="tab-title">Bank Details</h4>
                                <p class="tab-subtitle">We use bank details to settle payouts on completion of deals.</p>
                            </div>

                            <form method="POST" action="{{ route('profile.update.bank') }}" class="form-grid">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label">Bank Name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="bank_name" class="form-control" value="{{ $bank->bank_name }}">
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Account Number <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="account_no" class="form-control" value="{{ $bank->account_no }}">
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">IFSC Code <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="ifsc_code" class="form-control" value="{{ $bank->ifsc_code }}">
                                            <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button class="btn btn-primary btn-pill">Save &amp; Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="account-upload" role="tabpanel" aria-labelledby="account-upload-tab">
                        <div class="tab-pane-inner">
                            <div class="tab-heading">
                                <h4 class="tab-title">Upload Documents</h4>
                                <p class="tab-subtitle">Securely upload proof documents (maximum 2 MB per file).</p>
                            </div>

                            <div class="row g-4">
                                <div class="col-12">
                                    <label class="form-label fw-bold">Demat Account Proof <span class="text-danger">*</span></label>
                                    <div class="upload-dropzone">
                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                        <p class="mb-2">Drag &amp; drop files or click to browse</p>
                                        <button class="btn btn-outline-primary btn-sm">Select File</button>
                                    </div>
                                    <div class="mt-3">
                                        <small class="text-muted">If your file is password protected, share the password below</small>
                                        <input type="password" class="form-control mt-2" placeholder="Demat document password">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Other Supporting Document <small class="text-muted">(optional)</small></label>
                                    <div class="upload-dropzone">
                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                        <p class="mb-2">Drag &amp; drop files or click to browse</p>
                                        <button class="btn btn-outline-primary btn-sm">Select File</button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <button class="btn btn-primary btn-pill">Mark as Submitted</button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="account-review" role="tabpanel" aria-labelledby="account-review-tab">
                        <div class="tab-pane-inner">
                            <div class="tab-heading">
                                <h4 class="tab-title">Review &amp; Submit</h4>
                                <p class="tab-subtitle">Confirm the captured details before starting your investments.</p>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label">DP Id</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $demat->dp_id }}" readonly>
                                        <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Client Id</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $demat->client_id }}" readonly>
                                        <span class="input-group-text bg-success-subtle text-success"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="account-review mt-4">
                                <div class="review-section">
                                    <div class="section-header">
                                        <h6>Bank Details</h6>
                                        <button class="btn btn-outline-primary btn-sm"><i class="fas fa-edit me-1"></i>Edit</button>
                                    </div>
                                    <ul class="list-unstyled mb-0">
                                        <li><span>Bank Name</span><strong>{{ $bank->bank_name ?? '—' }}</strong></li>
                                        <li><span>Account Number</span><strong>{{ $bank->account_number ?? $bank->account_no ?? '—' }}</strong></li>
                                        <li><span>IFSC Code</span><strong>{{ $bank->ifsc_code ?? '—' }}</strong></li>
                                    </ul>
                                </div>

                                <div class="review-section">
                                    <div class="section-header">
                                        <h6>Uploaded Documents</h6>
                                        <button class="btn btn-outline-primary btn-sm"><i class="fas fa-edit me-1"></i>Update</button>
                                    </div>
                                    <div class="document-pill">
                                        <i class="fas fa-file-alt me-2"></i>
                                        Demat Document • pending upload
                                    </div>
                                </div>

                                <div class="review-section">
                                    <h6 class="mb-3">Verification Status</h6>
                                    <div class="verification-grid">
                                        <div class="verification-item">
                                            <span>Name</span>
                                            <span class="badge {{ $user->full_name ? 'bg-success-subtle text-success' : 'bg-secondary-subtle text-muted' }}">{{ $user->full_name ? 'Verified' : 'Pending' }}</span>
                                        </div>
                                        <div class="verification-item">
                                            <span>PAN</span>
                                            <span class="badge {{ $user->pan_no ? 'bg-success-subtle text-success' : 'bg-secondary-subtle text-muted' }}">{{ $user->pan_no ? 'Verified' : 'Pending' }}</span>
                                        </div>
                                        <div class="verification-item">
                                            <span>Bank</span>
                                            <span class="badge {{ $bank->account_number || $bank->account_no ? 'bg-success-subtle text-success' : 'bg-secondary-subtle text-muted' }}">{{ $bank->account_number || $bank->account_no ? 'Verified' : 'Pending' }}</span>
                                        </div>
                                        <div class="verification-item">
                                            <span>Demat</span>
                                            <span class="badge {{ $demat->dp_id && $demat->client_id ? 'bg-success-subtle text-success' : 'bg-secondary-subtle text-muted' }}">{{ $demat->dp_id && $demat->client_id ? 'Verified' : 'Pending' }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="termsCheck">
                                    <label class="form-check-label small" for="termsCheck">
                                        I confirm that the information provided is accurate and up to date. I authorise Altos Investech to use these details to process orders and deliveries.
                                    </label>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-success btn-lg btn-pill px-5">Submit &amp; Start Investing</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4">
            <div class="account-side">
                <div class="summary-card">
                    <h6 class="card-title mb-3">Relationship Manager</h6>
                    <div class="contact-line"><i class="fas fa-user"></i><span>Ranjit Thakur</span></div>
                    <div class="contact-line"><i class="fas fa-envelope"></i><a href="mailto:ranjit@altosinvestech.com">ranjit@altosinvestech.com</a></div>
                    <div class="contact-line"><i class="fas fa-phone"></i><a href="tel:+918727201510">+91 87272 01510</a></div>
                    <div class="mt-3 d-flex gap-2">
                        <a href="mailto:ranjit@altosinvestech.com" class="btn btn-outline-primary btn-sm flex-fill">Email</a>
                        <a href="tel:+918727201510" class="btn btn-primary btn-sm flex-fill">Call</a>
                    </div>
                </div>

                <div class="summary-card">
                    <h6 class="card-title mb-3">Research Desk</h6>
                    <ol class="research-links list-unstyled mb-0">
                        <li><a href="#">Join our WhatsApp community for the latest updates</a></li>
                        <li><a href="#">What you need to know about Waaree Energies Limited</a></li>
                        <li><a href="#">IPO wait times and how investors are using private deals</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
