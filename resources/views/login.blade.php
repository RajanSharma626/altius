<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bridging Gap</title>
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
        
        .login-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 48px 40px;
            width: 100%;
            max-width: 500px;
        }
        
        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .welcome-description {
            color: #6b7280;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 32px;
        }
        
        .google-btn {
            background: #1a73e8;
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 24px;
            transition: background-color 0.2s;
        }
        
        .google-btn:hover {
            background: #1557b0;
            color: white;
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
        
        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
            font-size: 0.875rem;
        }
        
        .form-control {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: #1a73e8;
            box-shadow: 0 0 0 0.2rem rgba(26, 115, 232, 0.25);
        }
        
        .form-control::placeholder {
            color: #9ca3af;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        
        .form-check {
            margin: 0;
        }
        
        .form-check-label {
            font-size: 0.875rem;
            color: #374151;
            cursor: pointer;
        }
        
        .forgot-link {
            color: #1a73e8;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .forgot-link:hover {
            color: #1557b0;
            text-decoration: underline;
        }
        
        .signin-btn {
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
        
        .signin-btn:hover {
            background: #1557b0;
        }
        
        .signup-link {
            text-align: center;
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        .signup-link a {
            color: #1a73e8;
            text-decoration: none;
            font-weight: 500;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .google-icon {
            width: 18px;
            height: 18px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h1 class="welcome-title">Welcome to<br>Bridging Gap</h1>
        <p class="welcome-description">
            Get the most recent reports and insights of Pre-IPO and startup companies. We provide all company due diligence and track all updates.
        </p>
        
        <form>
            <button type="button" class="btn google-btn">
                <svg class="google-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                Sign In
            </button>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Enter Email or Mobile</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            
            <div class="remember-forgot">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="keepLoggedIn">
                    <label class="form-check-label" for="keepLoggedIn">
                        Keep me logged in?
                    </label>
                </div>
                <a href="{{route('forgot-password')}}" class="forgot-link">Forgot Password?</a>
            </div>
            
            <button type="submit" class="btn signin-btn">Sign In</button>
            
            <div class="signup-link">
                Don't have an account? <a href="{{route('register')}}">Sign up</a>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>