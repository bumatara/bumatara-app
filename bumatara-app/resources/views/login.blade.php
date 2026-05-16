<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bumatara AI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --turquoise-dark: #0a2533;
            --turquoise-base: #004d61;
            --turquoise-light: #008fa8;
            --turquoise-glow: #00e5ff;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--turquoise-dark);
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(0, 143, 168, 0.15) 0%, transparent 45%),
                radial-gradient(circle at 90% 80%, rgba(0, 229, 255, 0.1) 0%, transparent 45%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }

        .login-card {
            background: rgba(15, 34, 45, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 143, 168, 0.3);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 
                        0 0 50px rgba(0, 229, 255, 0.05);
            transition: border-color 0.3s ease;
        }

        .login-card:hover {
            border-color: rgba(0, 229, 255, 0.5);
        }

        .brand-logo {
            font-size: 2.5rem;
            color: var(--turquoise-glow);
            text-shadow: 0 0 15px rgba(0, 229, 255, 0.4);
        }

        .form-label {
            color: #e2e8f0;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .input-group-text {
            background-color: rgba(10, 37, 51, 0.5);
            border: 1px solid rgba(0, 143, 168, 0.4);
            color: var(--turquoise-light);
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .form-control {
            background-color: rgba(10, 37, 51, 0.5);
            border: 1px solid rgba(0, 143, 168, 0.4);
            color: #ffffff;
            padding: 0.75rem 1rem;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background-color: rgba(10, 37, 51, 0.8);
            border-color: var(--turquoise-glow);
            box-shadow: 0 0 10px rgba(0, 229, 255, 0.2);
            color: #ffffff;
        }

        /* Override autofill style */
        .form-control:-webkit-autofill,
        .form-control:-webkit-autofill:hover, 
        .form-control:-webkit-autofill:focus {
            -webkit-text-fill-color: #ffffff;
            -webkit-box-shadow: 0 0 0px 1000px #0b222e inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--turquoise-base), var(--turquoise-light));
            border: none;
            color: white;
            padding: 0.75rem;
            border-radius: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 143, 168, 0.3);
        }

        .btn-login:hover {
            background: linear-gradient(135deg, var(--turquoise-light), var(--turquoise-glow));
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(0, 229, 255, 0.4);
            color: #0a2533;
        }

        .forgot-link {
            color: var(--turquoise-light);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: var(--turquoise-glow);
        }

        .signup-text {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .signup-link {
            color: var(--turquoise-glow);
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card text-center animate__animated animate__fadeIn">
        <div class="mb-3">
            <i class="bi bi-cpu brand-logo"></i>
        </div>
        
        <h3 class="fw-bold text-white mb-1">BUMATARA AI</h3>
        <p class="small text-uppercase tracking-wider mb-4" style="color: var(--turquoise-glow); font-size: 0.75rem; letter-spacing: 2px;">Intelligent Future</p>
        
        <h4 class="text-white fw-medium mb-2">Welcome Back</h4>
        <p class="text-muted small mb-4">Log in to access your dashboard.</p>

        <form action="#" method="POST" class="text-start">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control" id="email" placeholder="Enter your work email" required autocomplete="off">
                </div>
            </div>

            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <label for="password" class="form-label mb-0">Password</label>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
            </div>

            <div class="d-grid mb-4">
                <button type="submit" class="btn btn-login">Log In</button>
            </div>
        </form>

        <div class="signup-text">
            Don't have an account? <a href="#" class="signup-link">Sign up</a>
        </div>
    </div>

</body>
</html>