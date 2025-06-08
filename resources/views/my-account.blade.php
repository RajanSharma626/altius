@extends('layouts.app')

@section('title', 'My Account')

@section('content')

<div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-white border-end vh-100 p-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="d-flex align-items-center mb-3 p-3 bg-light rounded">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px;">
                            <small class="fw-bold">1</small>
                        </div>
                        <div>
                            <button class="nav-link active border-0 bg-transparent p-0 text-start" id="v-pills-basic-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basic" type="button" role="tab">
                                <div class="fw-semibold text-primary">Your Basic Profile</div>
                                <small class="text-muted">Name, Email, Mobile, PAN, Address</small>
                            </button>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3 p-3 rounded">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px;">
                            <small class="fw-bold">2</small>
                        </div>
                        <div>
                            <button class="nav-link border-0 bg-transparent p-0 text-start" id="v-pills-demat-tab" data-bs-toggle="pill" data-bs-target="#v-pills-demat" type="button" role="tab">
                                <div class="fw-semibold">Demat Details</div>
                                <small class="text-muted">DP Id, Client Id</small>
                            </button>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3 p-3 rounded">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px;">
                            <small class="fw-bold">3</small>
                        </div>
                        <div>
                            <button class="nav-link border-0 bg-transparent p-0 text-start" id="v-pills-bank-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bank" type="button" role="tab">
                                <div class="fw-semibold">Bank Details</div>
                                <small class="text-muted">Bank Name, Bank Account no, IFSC code</small>
                            </button>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3 p-3 rounded">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px;">
                            <small class="fw-bold">4</small>
                        </div>
                        <div>
                            <button class="nav-link border-0 bg-transparent p-0 text-start" id="v-pills-upload-tab" data-bs-toggle="pill" data-bs-target="#v-pills-upload" type="button" role="tab">
                                <div class="fw-semibold">Upload Documents</div>
                            </button>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3 p-3 rounded">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px;">
                            <small class="fw-bold">5</small>
                        </div>
                        <div>
                            <button class="nav-link border-0 bg-transparent p-0 text-start" id="v-pills-review-tab" data-bs-toggle="pill" data-bs-target="#v-pills-review" type="button" role="tab">
                                <div class="fw-semibold text-primary">Review & Submit</div>
                                <small class="text-primary">Start Investing</small>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 p-0">
                <!-- Header -->
                <div class="bg-primary text-white p-4">
                    <h2 class="mb-0">Let's complete a quick KYC</h2>
                </div>
                
                <!-- Tab Content -->
                <div class="tab-content p-4" id="v-pills-tabContent">
                    <!-- Basic Profile Tab -->
                    <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel">
                        <div class="bg-white rounded p-4 shadow-sm">
                            <h4 class="text-primary mb-4">Your Basic Profile</h4>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" value="maleacidul456@gmail.com">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Mobile No. <span class="text-danger">*</span></label>
                                    <div class="row">
                                        <div class="col-4">
                                            <select class="form-select">
                                                <option>+91</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="tel" class="form-control" value="7900336200">
                                                <span class="input-group-text bg-success text-white">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label">Full Name (As on PAN Card)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="MOHD ABDULLA">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label">PAN Number <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="BFPPV7163B">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label class="form-label">Address <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="2">FLAT 1002, A WING, GOLDEN TOWER, PLOT 55, SECTOR 24, PHASE 2, TALOJA, NAVI MUMBAI 410208</textarea>
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                    <select class="form-select">
                                        <option selected>Indian</option>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-primary">Update Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Demat Details Tab -->
                    <div class="tab-pane fade" id="v-pills-demat" role="tabpanel">
                        <div class="bg-white rounded p-4 shadow-sm">
                            <h4 class="text-primary mb-4">Demat Details</h4>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">DP Id <span class="text-danger">*</span> <i class="fas fa-info-circle text-muted"></i></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="12033200">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Client Id <span class="text-danger">*</span> <i class="fas fa-info-circle text-muted"></i></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="43334425">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <div class="alert alert-info">
                                        <strong>Your Demat Account Number = DP ID (first 8 characters) + Client ID (last 8 digits)</strong><br>
                                        This can be found on your broker / DP login, Holding Statement, DIS booklet. Need help? <a href="#" class="text-primary">Click Here</a>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-primary">Update Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bank Details Tab -->
                    <div class="tab-pane fade" id="v-pills-bank" role="tabpanel">
                        <div class="bg-white rounded p-4 shadow-sm">
                            <h4 class="text-primary mb-4">Bank Details</h4>
                            
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Bank Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="INDIAN BANK">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label class="form-label">Account Number <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="6753552973">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <label class="form-label">IFSC Code <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="IDIB000T109">
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-primary">Update Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Documents Tab -->
                    <div class="tab-pane fade" id="v-pills-upload" role="tabpanel">
                        <div class="bg-white rounded p-4 shadow-sm">
                            <h4 class="text-primary mb-2">Upload Documents</h4>
                            <p class="text-muted mb-4">Documents maximum allowed size <span class="text-danger">2MB</span></p>
                            
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <label class="form-label fw-bold">Demat Account proof <span class="text-danger">*</span> <small class="text-muted">(DIS booklet or screenshot showing Account Name, DP Id and Client Id)</small></label>
                                    <div class="border border-2 border-dashed rounded p-5 text-center bg-light">
                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                        <p class="mb-2">Drop your file here to upload</p>
                                        <p class="text-muted mb-3">or</p>
                                        <button class="btn btn-outline-primary">Select File</button>
                                    </div>
                                    <div class="mt-2">
                                        <small class="text-muted">If your file is password protected please provide us with the password</small>
                                        <input type="password" class="form-control mt-1" placeholder="Demat Document Password">
                                    </div>
                                    <button class="btn btn-primary btn-sm mt-2">Connect Document</button>
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <label class="form-label fw-bold">Other Document <small class="text-muted">(optional)</small></label>
                                    <div class="border border-2 border-dashed rounded p-5 text-center bg-light">
                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                        <p class="mb-2">Drop your file here to upload</p>
                                        <p class="text-muted mb-3">or</p>
                                        <button class="btn btn-outline-primary">Select File</button>
                                    </div>
                                    <div class="mt-2">
                                        <small class="text-muted">If your file is password protected please provide us with the password</small>
                                        <input type="password" class="form-control mt-1" placeholder="Other Document Password">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-primary">Update Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Review & Submit Tab -->
                    <div class="tab-pane fade" id="v-pills-review" role="tabpanel">
                        <div class="bg-white rounded p-4 shadow-sm">
                            <!-- Top Summary -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">DP Id <i class="fas fa-info-circle text-muted"></i></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="12033200" readonly>
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Client Id <i class="fas fa-info-circle text-muted"></i></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="43334425" readonly>
                                        <span class="input-group-text bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bank Details Section -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="text-primary mb-0">Bank Details</h5>
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Bank Name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="INDIAN BANK" readonly>
                                            <span class="input-group-text bg-success text-white">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Account Number <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="6753552973" readonly>
                                            <span class="input-group-text bg-success text-white">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">IFSC Code <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="IDIB000T109" readonly>
                                            <span class="input-group-text bg-success text-white">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Uploaded Documents Section -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="text-primary mb-0">Uploaded Documents</h5>
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                </div>
                                <div class="bg-primary text-white p-2 rounded">
                                    <i class="fas fa-file-alt me-2"></i> Demat Document
                                </div>
                            </div>
                            
                            <!-- Verification Status -->
                            <div class="mb-4">
                                <h5 class="text-primary mb-3">Verification Status</h5>
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold">Name</td>
                                                <td class="text-end">
                                                    <span class="badge bg-success">Verified</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">PAN</td>
                                                <td class="text-end">
                                                    <span class="badge bg-success">Verified</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Bank</td>
                                                <td class="text-end">
                                                    <span class="badge bg-success">Verified</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Demat</td>
                                                <td class="text-end">
                                                    <span class="badge bg-success">Verified</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- Terms and Conditions -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="termsCheck">
                                    <label class="form-check-label small" for="termsCheck">
                                        I hereby confirm and declare that all the information provided by me is true and latest to the best of my knowledge. I acknowledge that Altos Investech will use this information to process payment and deliver shares.
                                    </label>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-success btn-lg px-5">Submit & Start Investing</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
