<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bridging Gap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f3f4;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .register-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 48px 40px;
            width: 100%;
            max-width: 500px;
        }
        
        .register-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 16px;
            text-align: center;
        }
        
        .register-description {
            color: #6b7280;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 32px;
            text-align: center;
        }
        
        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
            font-size: 0.875rem;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        .input-group-text {
            background-color: #f9fafb;
            border-right: none;
            color: #6b7280;
            border: 1px solid #d1d5db;
            border-radius: 8px 0 0 8px;
            padding: 12px 16px;
        }
        
        .form-control {
            border-left: none;
            border: 1px solid #d1d5db;
            border-radius: 0 8px 8px 0;
            padding: 12px 16px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            border-color: #1a73e8;
            box-shadow: 0 0 0 0.2rem rgba(26, 115, 232, 0.25);
        }
        
        .form-control:focus + .input-group-text,
        .input-group-text:has(+ .form-control:focus) {
            border-color: #1a73e8;
        }
        
        .form-control::placeholder {
            color: #9ca3af;
        }
        
        .password-toggle {
            background: none;
            border: none;
            color: #6b7280;
            padding: 0;
            cursor: pointer;
            margin-left: 8px;
        }
        
        .password-toggle:hover {
            color: #374151;
        }
        
        .terms-check {
            margin-bottom: 24px;
        }
        
        .form-check-label {
            font-size: 0.875rem;
            color: #374151;
            cursor: pointer;
        }
        
        .form-check-label a {
            color: #1a73e8;
            text-decoration: none;
        }
        
        .form-check-label a:hover {
            text-decoration: underline;
        }
        
        .register-btn {
            background: #1a73e8;
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            width: 100%;
            margin-bottom: 24px;
            transition: background-color 0.2s;
        }
        
        .register-btn:hover {
            background: #1557b0;
        }
        
        .register-btn:disabled {
            background: #9ca3af;
            cursor: not-allowed;
        }
        
        .divider {
            text-align: center;
            margin: 24px 0;
            position: relative;
            color: #9ca3af;
            font-size: 0.875rem;
        }
        
        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e5e7eb;
            z-index: 1;
        }
        
        .divider span {
            background: white;
            padding: 0 16px;
            position: relative;
            z-index: 2;
        }
        
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
        
        .login-link {
            text-align: center;
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        .login-link a {
            color: #1a73e8;
            text-decoration: none;
            font-weight: 500;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .google-icon {
            width: 18px;
            height: 18px;
        }
        
        .password-strength {
            font-size: 0.75rem;
            margin-top: 4px;
            margin-bottom: 16px;
        }
        
        .strength-weak { color: #ef4444; }
        .strength-medium { color: #f59e0b; }
        .strength-strong { color: #10b981; }
    </style>
</head>
<body>
    <div class="register-card">
        <h1 class="register-title">Create Account</h1>
        <p class="register-description">
            Join Bridging Gap to access exclusive Pre-IPO insights and startup company reports.
        </p>
        
        <form id="registerForm">
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" class="form-control" id="password" placeholder="Create a strong password" required>
                    <span class="input-group-text">
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="bi bi-eye" id="passwordToggleIcon"></i>
                        </button>
                    </span>
                </div>
                <div class="password-strength" id="passwordStrength"></div>
            </div>
            
            <div class="form-check terms-check">
                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                <label class="form-check-label" for="agreeTerms">
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
            </div>
            
            <button type="submit" class="btn register-btn">Create Account</button>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
            <button type="button" class="btn google-btn">
                <svg class="google-icon" viewBox="0 0 24 24">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                Continue with Google
            </button>
            
            <div class="login-link">
                Already have an account? <a href="#">Sign in</a>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('passwordToggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.className = 'bi bi-eye-slash';
            } else {
                passwordInput.type = 'password';
                toggleIcon.className = 'bi bi-eye';
            }
        }
        
        function checkPasswordStrength(password) {
            const strengthIndicator = document.getElementById('passwordStrength');
            let strength = 0;
            let feedback = '';
            
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            switch (strength) {
                case 0:
                case 1:
                case 2:
                    feedback = 'Weak password';
                    strengthIndicator.className = 'password-strength strength-weak';
                    break;
                case 3:
                case 4:
                    feedback = 'Medium strength password';
                    strengthIndicator.className = 'password-strength strength-medium';
                    break;
                case 5:
                    feedback = 'Strong password';
                    strengthIndicator.className = 'password-strength strength-strong';
                    break;
            }
            
            strengthIndicator.textContent = password.length > 0 ? feedback : '';
        }
        
        document.getElementById('password').addEventListener('input', function(e) {
            checkPasswordStrength(e.target.value);
        });
        
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = document.querySelector('.register-btn');
            const originalText = submitBtn.textContent;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Creating Account...';
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
                alert('Account created successfully!');
            }, 2000);
        });
    </script>
</body>
</html>