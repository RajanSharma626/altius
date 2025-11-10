<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Aura</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <div class="brand-badge">
                    <span>A</span>
                </div>
                <h1>Create account</h1>
                <p>Join Aura to access your personalized dashboard</p>
            </div>

            <div class="auth-body">
                <div class="social-login">
                    <button type="button" class="social-btn" aria-label="Continue with Google">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" width="22" height="22">
                        <span class="social-btn-label">Continue with Google</span>
                    </button>
                </div>

                <div class="divider">or continue with email</div>

                @if ($errors->any())
                    <div class="alert alert-danger border-0 rounded-3 py-2 px-3">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>Please fix the highlighted issues.
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success border-0 rounded-3 py-2 px-3">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register.post') }}" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input
                            type="text"
                            id="full_name"
                            name="full_name"
                            class="form-control @error('full_name') is-invalid @enderror"
                            placeholder="John Carter"
                            value="{{ old('full_name') }}"
                            required
                        >
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="name@example.com"
                            value="{{ old('email') }}"
                            required
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone_no" class="form-label">Phone Number</label>
                        <input
                            type="tel"
                            id="phone_no"
                            name="phone_no"
                            class="form-control @error('phone_no') is-invalid @enderror"
                            placeholder="+1 555 0123 456"
                            value="{{ old('phone_no') }}"
                            required
                        >
                        @error('phone_no')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="referral_code" class="form-label">Referral Code (optional)</label>
                        <input
                            type="text"
                            id="referral_code"
                            name="referral_code"
                            class="form-control @error('referral_code') is-invalid @enderror"
                            placeholder="Enter referral code"
                            value="{{ old('referral_code') }}"
                        >
                        @error('referral_code')
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
                            placeholder="Create a password"
                            required
                        >
                        <button type="button" class="toggle-password" data-target="password" aria-label="Toggle password visibility">
                            <i class="bi bi-eye"></i>
                        </button>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 password-field">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Confirm password"
                            required
                        >
                        <button type="button" class="toggle-password" data-target="password_confirmation" aria-label="Toggle password visibility">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>

                    <p class="terms-text mb-4">
                        By creating an account, you agree to our
                        <a href="#" class="text-decoration-none fw-semibold">Terms</a> and
                        <a href="#" class="text-decoration-none fw-semibold">Privacy Policy</a>.
                    </p>

                    <button type="submit" class="primary-btn">Create account</button>
                </form>

                <div class="auth-footer">
                    Already have an account?
                    <a href="{{ route('login') }}">Sign in</a>
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
