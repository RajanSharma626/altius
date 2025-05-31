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
                                <p class="mb-3">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-3">
                                    <label class="form-label" for="typeEmailX">Full Name<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control py-2" placeholder="Enter Name" />
                                </div>
                                <div class="form-outline form-white mb-3">
                                    <label class="form-label" for="typeEmailX">Email<sup class="text-danger">*</sup></label>
                                    <input type="email" id="typeEmailX" class="form-control py-2"
                                        placeholder="Enter Email" />
                                </div>

                                <div class="form-outline form-white mb-3">
                                    <label class="form-label" for="typePasswordX">Phone No.<sup class="text-danger">*</sup></label>
                                    <input type="number" id="typePasswordX" class="form-control py-2"
                                        placeholder="Enter Phone No." />
                                </div>

                                <div class="form-outline form-white mb-3">
                                    <label class="form-label" for="typePasswordX">Referral Code (Optional)</label>
                                    <input type="number" id="typePasswordX" class="form-control py-2"
                                        placeholder="Have a referral code?" />
                                </div>

                                <button class="btn btn-primary btn-lg w-100 px-5" type="submit">Create</button>

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
