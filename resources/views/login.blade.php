<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bridging Gap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #f3f8fd 0%, #dff7ea 100%); }
        .brand-logo { width: 140px; margin-bottom: 0.8rem; }
    </style>
</head>
<body class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <img src="https://bridginggap.org/wp-content/uploads/2025/03/BgisLogoFinalx300.png" alt="Bridging Gap Logo" class="brand-logo mx-auto d-block">
                        </div>
                        <h4 class="fw-semibold text-center mb-2 text-primary">Login</h4>
                        <p class="text-center text-muted small mb-4">Sign in to your Bridging Gap account</p>
                        
                        @if (session('success'))
                            <div class="alert alert-success border-0 rounded-2">
                                <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login.post') }}" class="mt-2">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" value="{{ old('email') }}" required autofocus />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" required />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="{{ route('forgot-password') }}" class="small text-primary text-decoration-none fw-semibold">Forgot password?</a>
                            </div>
                            <button class="btn btn-primary w-100 mb-3" type="submit">Log In</button>
                            <div class="text-center my-2">
                                <span class="text-muted small">OR</span>
                            </div>
                            <a href="#" class="btn btn-outline-secondary w-100 mb-2">
                                <i class="bi bi-google me-2"></i> Continue with Google
                            </a>
                        </form>
                        <div class="text-center mt-3">
                            <p class="mb-0 small text-muted">Don't have an account?
                                <a href="{{ route('register') }}" class="fw-bold text-primary text-decoration-none">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
