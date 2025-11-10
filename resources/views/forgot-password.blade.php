<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Aura</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/forgot-password.css') }}">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <div class="brand-badge">
                    <span>A</span>
                </div>
                <h1>Forgot password?</h1>
                <p>Enter your email and we will send you instructions to reset it.</p>
            </div>

            <div class="auth-body">
                @if (session('status'))
                    <div class="alert alert-success border-0 rounded-3 py-2 px-3">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger border-0 rounded-3 py-2 px-3">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>Please check the email entered.
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
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

                    <button type="submit" class="primary-btn">Send reset link</button>
                </form>

                <div class="auth-footer">
                    Remember your password?
                    <a href="{{ route('login') }}">Back to sign in</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
