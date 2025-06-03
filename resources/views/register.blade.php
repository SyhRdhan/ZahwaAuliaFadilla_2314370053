<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - HostBit</title>
    <link rel="stylesheet" href="assets/css/auth_style.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/scale.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
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
                <a class="navbar-brand" href="index.html">
                    <span class="logo">HOSTBIT</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
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
                        <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link active btn-sm" href="register.html">Register</a></li>
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
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <main class="login-main-container">
        <div class="login-form-card register-form-card" data-aos="fade-up">
            <h2>Create Your Account</h2>
            <div class="alert alert-success hidden" id="success-message" role="alert">
                Registration successful! Please check your email to verify your account.
            </div>
            <form id="register-form" action="/api/register" method="POST" novalidate>
                <input type="hidden" name="_csrf" value="dummy-csrf-token">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required aria-describedby="username-error">
                    <div class="form-error" id="username-error">Username must be 3-20 characters, letters and numbers only.</div>
                    <div class="tooltip" data-tippy-content="Use 3-20 characters, letters and numbers only">?</div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required aria-describedby="email-error">
                    <div class="form-error" id="email-error">Please enter a valid email address.</div>
                    <div class="tooltip" data-tippy-content="Enter a valid email (e.g., user@example.com)">?</div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required aria-describedby="password-error password-strength">
                        <button type="button" class="toggle-password" aria-label="Toggle password visibility">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="form-error" id="password-error">Password must be at least 8 characters.</div>
                    <div class="password-strength-indicator" id="password-strength">Strength: Weak</div>
                    <div class="tooltip" data-tippy-content="Password must be at least 8 characters, including a number and a special character">?</div>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <div class="password-wrapper">
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required aria-describedby="confirm-password-error">
                        <button type="button" class="toggle-password" aria-label="Toggle confirm password visibility">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="form-error" id="confirm-password-error">Passwords do not match.</div>
                </div>
                <div class="form-group terms-group">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required aria-describedby="terms-error">
                    <label for="terms">I agree to the <a href="terms.html" target="_blank">Terms of Service</a> and <a href="privacy.html" target="_blank">Privacy Policy</a></label>
                    <div class="form-error" id="terms-error">You must agree to the terms.</div>
                </div>
                <button type="submit" class="btn-login">Register</button>
                <div class="social-login mt-20">
                    <p>Or register with:</p>
                    <div class="social-btn-group">
                        <button type="button" class="social-login-btn google-btn"><i class="fab fa-google"></i> Google</button>
                        <button type="button" class="social-login-btn github-btn"><i class="fab fa-github"></i> GitHub</button>
                    </div>
                </div>
                <div class="captcha-wrapper">
                    <div id="recaptcha" class="g-recaptcha" data-sitekey="your-recaptcha-site-key"></div>
                    <div class="form-error hidden" id="captcha-error">Please verify you are not a robot.</div>
                </div>
                <div class="auth-links text-center mt-20">
                    <p>Already have an account? <a href="login.html">Login Now!</a></p>
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
                <p>© 2025 HostBit. All Rights Reserved.</p>
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

        // Password Strength Indicator
        const passwordInput = document.getElementById('password');
        const strengthIndicator = document.getElementById('password-strength');
        passwordInput.addEventListener('input', () => {
            const value = passwordInput.value;
            if (value.length < 8) {
                strengthIndicator.textContent = 'Strength: Weak';
                strengthIndicator.className = 'password-strength-indicator weak';
            } else if (value.length < 12 || !/[0-9]/.test(value) || !/[!@#$%^&*]/.test(value)) {
                strengthIndicator.textContent = 'Strength: Medium';
                strengthIndicator.className = 'password-strength-indicator medium';
            } else {
                strengthIndicator.textContent = 'Strength: Strong';
                strengthIndicator.className = 'password-strength-indicator strong';
            }
        });

        // Form Validation
        const form = document.getElementById('register-form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let isValid = true;

            // Username validation
            const username = document.getElementById('username');
            const usernameError = document.getElementById('username-error');
            if (!username.value.match(/^[a-zA-Z0-9]{3,20}$/)) {
                username.classList.add('is-invalid');
                usernameError.classList.remove('hidden');
                isValid = false;
            } else {
                username.classList.remove('is-invalid');
                username.classList.add('is-valid');
                usernameError.classList.add('hidden');
            }

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
            if (!password.value.match(/^(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/)) {
                password.classList.add('is-invalid');
                passwordError.classList.remove('hidden');
                isValid = false;
            } else {
                password.classList.remove('is-invalid');
                password.classList.add('is-valid');
                passwordError.classList.add('hidden');
            }

            // Confirm password validation
            const confirmPassword = document.getElementById('confirm-password');
            const confirmPasswordError = document.getElementById('confirm-password-error');
            if (confirmPassword.value !== password.value) {
                confirmPassword.classList.add('is-invalid');
                confirmPasswordError.classList.remove('hidden');
                isValid = false;
            } else {
                confirmPassword.classList.remove('is-invalid');
                confirmPassword.classList.add('is-valid');
                confirmPasswordError.classList.add('hidden');
            }

            // Terms validation
            const terms = document.getElementById('terms');
            const termsError = document.getElementById('terms-error');
            if (!terms.checked) {
                terms.classList.add('is-invalid');
                termsError.classList.remove('hidden');
                isValid = false;
            } else {
                terms.classList.remove('is-invalid');
                terms.classList.add('is-valid');
                termsError.classList.add('hidden');
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
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', () => {
                const input = button.previousElementSibling;
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                button.querySelector('i').classList.toggle('fa-eye');
                button.querySelector('i').classList.toggle('fa-eye-slash');
            });
        });

        // Preloader
        window.addEventListener('load', () => {
            document.getElementById('preloader').classList.add('hidden');
        });
    </script>
</body>
</html>