<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bridging Gap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .google-btn {
            background: white;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 24px;
            transition: all 0.2s;
        }

        .google-btn:hover {
            background: #f9fafb;
            border-color: #9ca3af;
            color: #374151;
        }
    </style>

</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">

                            <div class="mt-md-4 mb-3">

                                <h2 class="fw-bold mb-2 text-uppercase">Create Account</h2>
                                <p class="mb-3">Please enter your details to register!</p>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    
                                    <div class="form-outline form-white mb-3">
                                        <label class="form-label" for="full_name">Full Name<sup class="text-danger">*</sup></label>
                                        <input type="text" id="full_name" name="full_name" class="form-control py-2 @error('full_name') is-invalid @enderror" 
                                            placeholder="Enter Full Name" value="{{ old('full_name') }}" required />
                                        @error('full_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-outline form-white mb-3">
                                        <label class="form-label" for="email">Email<sup class="text-danger">*</sup></label>
                                        <input type="email" id="email" name="email" class="form-control py-2 @error('email') is-invalid @enderror"
                                            placeholder="Enter Email" value="{{ old('email') }}" required />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <label class="form-label" for="phone_no">Phone No.<sup class="text-danger">*</sup></label>
                                        <input type="tel" id="phone_no" name="phone_no" class="form-control py-2 @error('phone_no') is-invalid @enderror"
                                            placeholder="Enter Phone No." value="{{ old('phone_no') }}" required />
                                        @error('phone_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <label class="form-label" for="referral_code">Referral Code (Optional)</label>
                                        <input type="text" id="referral_code" name="referral_code" class="form-control py-2 @error('referral_code') is-invalid @enderror"
                                            placeholder="Have a referral code?" value="{{ old('referral_code') }}" />
                                        @error('referral_code')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <label class="form-label" for="password">Password<sup class="text-danger">*</sup></label>
                                        <input type="password" id="password" name="password" class="form-control py-2 @error('password') is-invalid @enderror"
                                            placeholder="Enter Password" required />
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <label class="form-label" for="password_confirmation">Confirm Password<sup class="text-danger">*</sup></label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control py-2"
                                            placeholder="Confirm Password" required />
                                    </div>

                                    <button class="btn btn-primary btn-lg w-100 px-5" type="submit">Create Account</button>
                                </form>

                                <div class="d-flex align-items-center my-3">
                                    <hr class="flex-grow-1">
                                    <span class="mx-2 text-muted">OR</span>
                                    <hr class="flex-grow-1">
                                </div>
                                <a href="" class="btn google-btn w-100 mb-2">
                                    <i class="bi bi-google me-2"></i> Continue with Google
                                </a>
                            </div>

                            <div>
                                <p class="mb-0">Already have an account? <a href="{{ route('login') }}"
                                        class="fw-bold">Login</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
