<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Profile - Altius</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <h2 class="fw-bold mb-4 text-uppercase text-center">Complete Your Profile</h2>
                            <p class="mb-4 text-center">Please provide additional information to complete your registration.</p>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('profile.complete') }}" enctype="multipart/form-data">
                                @csrf
                                
                                <!-- Basic Profile Details -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Basic Profile Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="mobile_no">Mobile No.<sup class="text-danger">*</sup></label>
                                                <input type="tel" id="mobile_no" name="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" 
                                                    placeholder="Enter Mobile No." value="{{ old('mobile_no') }}" required />
                                                @error('mobile_no')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="pan_no">PAN No.<sup class="text-danger">*</sup></label>
                                                <input type="text" id="pan_no" name="pan_no" class="form-control @error('pan_no') is-invalid @enderror" 
                                                    placeholder="Enter PAN No." value="{{ old('pan_no') }}" required />
                                                @error('pan_no')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="address">Address<sup class="text-danger">*</sup></label>
                                            <textarea id="address" name="address" class="form-control @error('address') is-invalid @enderror" 
                                                rows="3" placeholder="Enter your address" required>{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="nationality">Nationality<sup class="text-danger">*</sup></label>
                                            <input type="text" id="nationality" name="nationality" class="form-control @error('nationality') is-invalid @enderror" 
                                                placeholder="Enter Nationality" value="{{ old('nationality') }}" required />
                                            @error('nationality')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Demat Details -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Demat Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="dp_id">DP ID<sup class="text-danger">*</sup></label>
                                                <input type="text" id="dp_id" name="dp_id" class="form-control @error('dp_id') is-invalid @enderror" 
                                                    placeholder="Enter DP ID" value="{{ old('dp_id') }}" required />
                                                @error('dp_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="client_id">Client ID<sup class="text-danger">*</sup></label>
                                                <input type="text" id="client_id" name="client_id" class="form-control @error('client_id') is-invalid @enderror" 
                                                    placeholder="Enter Client ID" value="{{ old('client_id') }}" required />
                                                @error('client_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bank Details -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Bank Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="bank_name">Bank Name<sup class="text-danger">*</sup></label>
                                                <input type="text" id="bank_name" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror" 
                                                    placeholder="Enter Bank Name" value="{{ old('bank_name') }}" required />
                                                @error('bank_name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="account_no">Account No.<sup class="text-danger">*</sup></label>
                                                <input type="text" id="account_no" name="account_no" class="form-control @error('account_no') is-invalid @enderror" 
                                                    placeholder="Enter Account No." value="{{ old('account_no') }}" required />
                                                @error('account_no')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="ifsc_code">IFSC Code<sup class="text-danger">*</sup></label>
                                            <input type="text" id="ifsc_code" name="ifsc_code" class="form-control @error('ifsc_code') is-invalid @enderror" 
                                                placeholder="Enter IFSC Code" value="{{ old('ifsc_code') }}" required />
                                            @error('ifsc_code')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Document Upload -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>Document Upload</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="upload_documents">Upload Documents<sup class="text-danger">*</sup></label>
                                            <input type="file" id="upload_documents" name="upload_documents[]" class="form-control @error('upload_documents') is-invalid @enderror" 
                                                multiple accept=".pdf,.jpg,.jpeg,.png" required />
                                            <small class="form-text text-muted">Upload multiple documents (PDF, JPG, PNG)</small>
                                            @error('upload_documents')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="upload_document_password">Document Password<sup class="text-danger">*</sup></label>
                                            <input type="password" id="upload_document_password" name="upload_document_password" class="form-control @error('upload_document_password') is-invalid @enderror" 
                                                placeholder="Enter Document Password" required />
                                            @error('upload_document_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="other_documents">Other Documents</label>
                                            <input type="file" id="other_documents" name="other_documents[]" class="form-control @error('other_documents') is-invalid @enderror" 
                                                multiple accept=".pdf,.jpg,.jpeg,.png" />
                                            <small class="form-text text-muted">Upload additional documents (Optional)</small>
                                            @error('other_documents')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="other_document_password">Other Document Password</label>
                                            <input type="password" id="other_document_password" name="other_document_password" class="form-control @error('other_document_password') is-invalid @enderror" 
                                                placeholder="Enter Other Document Password" />
                                            @error('other_document_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-lg w-100 px-5" type="submit">Complete Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

