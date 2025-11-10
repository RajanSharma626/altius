<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bridging Gap</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <div class="brand-badge">
                    <span>BG</span>
                </div>
                <h1>Welcome back</h1>
                <p>Please enter your details to sign in</p>
            </div>

            <div class="auth-body">
                <div class="social-login">
                    <a href="{{ route('google.redirect') }}" class="social-btn text-decoration-none" aria-label="Continue with Google">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" width="22" height="22">
                        <span class="social-btn-label">Continue with Google</span>
                    </a>
                </div>

                <div class="divider">or continue with email</div>

                @if (session('success'))
                    <div class="alert alert-success border-0 rounded-3 py-2 px-3">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.post') }}" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="name@example.com"
                            required
                            autofocus
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 password-field">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Enter password"
                            required
                        >
                        <button type="button" class="toggle-password" data-target="password" aria-label="Toggle password visibility">
                            <i class="bi bi-eye"></i>
                        </button>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="1" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="{{ route('forgot-password') }}" class="auth-link">Forgot password?</a>
                    </div>

                    <button type="submit" class="primary-btn">Sign in</button>
                </form>

                <div class="auth-footer">
                    Don’t have an account?
                    <a href="{{ route('register') }}">Sign up</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.toggle-password').forEach(function(button) {
            button.addEventListener('click', function () {
                const target = document.getElementById(this.dataset.target);
                const icon = this.querySelector('i');
                const isPassword = target.getAttribute('type') === 'password';
                target.setAttribute('type', isPassword ? 'text' : 'password');
                icon.classList.toggle('bi-eye');
                icon.classList.toggle('bi-eye-slash');
            });
        });
    </script>
</body>
</html>
