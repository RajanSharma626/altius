<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bridging Gap - Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Minimal custom CSS - only what Bootstrap can't handle */
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <span class="navbar-brand mb-0 h1 fw-bold text-dark">
                <img src="https://bridginggap.org/wp-content/uploads/2025/03/BgisLogoFinalx300.png" class="img-fluid"
                    width="200px" alt="">
            </span>
            <button class="btn btn-primary btn-sm">
                <i class="fab fa-google me-1"></i>Sign In
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid vh-100">
        <div class="row h-100 align-items-center">
            <!-- Login Form Section -->
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="card shadow-lg border-0 rounded-4" style="max-width: 450px; width: 100%;">
                    <div class="card-body p-5">
                        <h1 class="display-6 fw-bold text-dark mb-3">Reset Password</h1>
                        <p class="text-muted mb-4 lh-base">
                           Enter your email account associated with Altius Investech
                        </p>

                        <!-- Login Form -->
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold text-dark">Enter Email</label>
                                <input type="email" class="form-control form-control-lg border-2" id="email"
                                    placeholder="Email">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Submit</button>
                        </form>

                        <div class="text-center mt-4">
                            <span class="text-muted">Remembered your password?</span>
                            <a href="{{route('login')}}" class="text-primary text-decoration-none fw-semibold">Login</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Illustration Section -->
            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/login/login.png') }}" class="img-fluid w-100" alt="">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
