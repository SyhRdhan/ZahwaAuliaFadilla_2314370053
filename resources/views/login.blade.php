<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HostBit</title>
    <link rel="stylesheet" href="assets/css/auth_style.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/scale.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
        <span>Loading</span>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <span class="logo">HOSTBIT</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Hosting</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Shared Hosting</a></li>
                                <li><a class="dropdown-item" href="#">VPS Hosting</a></li>
                                <li><a class="dropdown-item" href="#">Dedicated Hosting</a></li>
                                <li><a class="dropdown-item" href="#">Cloud Hosting</a></li>
                                <li><a class="dropdown-item" href="#">WordPress Hosting</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Domains</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Domain Checker</a></li>
                                <li><a class="dropdown-item" href="#">Domain Transfer</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Data Centers</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" href="login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link btn-sm" href="register.html">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <main class="login-main-container">
        <div class="login-form-card" data-aos="fade-up">
            <h2>Login to your Account</h2>
            <div class="alert alert-success hidden" id="success-message" role="alert">
                Login successful! Redirecting...
            </div>
            <form id="login-form" action="/api/login" method="POST" novalidate>
                <input type="hidden" name="_csrf" value="dummy-csrf-token">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required aria-describedby="email-error">
                    <div class="form-error" id="email-error">Please enter a valid email address.</div>
                    <div class="tooltip" data-tippy-content="Enter a valid email (e.g., user@example.com)">?</div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required aria-describedby="password-error">
                        <button type="button" class="toggle-password" aria-label="Toggle password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="form-error" id="password-error">Password must be at least 6 characters.</div>
                    <div class="tooltip" data-tippy-content="Password must be at least 6 characters long">?</div>
                </div>
                <div class="form-group checkbox-group">
                    <input type="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                    <a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <!-- Social Login -->
                <div class="social-login">
                    <p>Or login with:</p>
                    <button type="button" class="social-login-btn google-btn"><i class="fab fa-google"></i> Google</button>
                    <button type="button" class="social-login-btn github-btn"><i class="fab fa-github"></i> GitHub</button>
                </div>
                <!-- CAPTCHA -->
                <div class="captcha-wrapper">
                    <div id="recaptcha" class="g-recaptcha" data-sitekey="your-recaptcha-site-key"></div>
                    <div class="form-error hidden" id="captcha-error">Please verify you are not a robot.</div>
                </div>
                <div class="auth-links text-center">
                    <p>Don't have an account? <a href="register.html" class="btn-login-btn">Register Now!</a></p>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>About Us</h4>
                    <p>Your reliable hosting partner. We provide fast, secure, and scalable hosting solutions for businesses of all sizes.</p>
                </div>
                <div class="col-md-4">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Shared Hosting</a></li>
                        <li><a href="#">VPS Hosting</a></li>
                        <li><a href="#">Dedicated Hosting</a></li>
                        <li><a href="#">Domain Registration</a></li>
                        <li><a href="#">WordPress Hosting</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Contact Info</h4>
                    <p>123 Hosting Street, Web City, HC 12345</p>
                    <p>(+86) 123-4567-8900</p>
                    <p><a href="mailto:support@hostbit.com">support@hostbit.com</a></p>
                    <p><a href="https://www.hostbit.com">www.hostbit.com</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 HostBit. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6.3.7/dist/tippy-bundle.umd.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // AOS Initialization
        AOS.init();

        // Tippy.js Initialization
        tippy('[data-tippy-content]', {
            animation: 'scale',
            theme: 'light',
        });

        // Form Validation
        const form = document.getElementById('login-form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let isValid = true;

            // Email validation
            const email = document.getElementById('email');
            const emailError = document.getElementById('email-error');
            if (!email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                email.classList.add('is-invalid');
                emailError.classList.remove('hidden');
                isValid = false;
            } else {
                email.classList.remove('is-invalid');
                email.classList.add('is-valid');
                emailError.classList.add('hidden');
            }

            // Password validation
            const password = document.getElementById('password');
            const passwordError = document.getElementById('password-error');
            if (password.value.length < 6) {
                password.classList.add('is-invalid');
                passwordError.classList.remove('hidden');
                isValid = false;
            } else {
                password.classList.remove('is-invalid');
                password.classList.add('is-valid');
                passwordError.classList.add('hidden');
            }

            // CAPTCHA validation (placeholder)
            // const captchaError = document.getElementById('captcha-error');
            // if (!grecaptcha.getResponse()) {
            //     captchaError.classList.remove('hidden');
            //     isValid = false;
            // } else {
            //     captchaError.classList.add('hidden');
            // }

            if (isValid) {
                const submitBtn = form.querySelector('.btn-login');
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
                setTimeout(() => {
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;
                    document.getElementById('success-message').classList.remove('hidden');
                    setTimeout(() => {
                        // form.submit(); // Uncomment for actual submission
                    }, 2000);
                }, 2000);
            }
        });

        // Password Visibility Toggle
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.getElementById('password');
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.querySelector('i').classList.toggle('fa-eye');
            togglePassword.querySelector('i').classList.toggle('fa-eye-slash');
        });

        // Preloader
        window.addEventListener('load', () => {
            document.getElementById('preloader').classList.add('hidden');
        });
    </script>
</body>
</html>