<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="{{ app('settings')['theme'] ?? 'dark' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar main-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}" style="text-decoration:none;">
                <div class="brand-icon">
                    <i class="bi bi-boxes"></i>
                </div>
                <span style="font-family:'Syne',sans-serif; font-weight:700; font-size:1.05rem; color:var(--bs-body-color);">
                    {{ config('app.name') }}
                </span>
            </a>
            <div class="d-flex align-items-center gap-2">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-hero-primary">
                        <i class="bi bi-grid"></i> Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-hero-outline" style="padding:9px 18px; font-size:13.5px;">Sign in</a>
                    <a href="{{ route('register') }}" class="btn-hero-primary" style="padding:9px 18px; font-size:13.5px;">Get started</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-shrink-0">
        {{-- Hero --}}
        <section class="hero-section">
            <div class="container text-center">
                <div class="hero-badge">
                    <i class="bi bi-stars"></i>
                    Laravel + Bootstrap 5 + Livewire
                </div>
                <h1 class="hero-title">
                    Build faster with<br>
                    <span class="highlight">Bootstrap Kit</span>
                </h1>
                <p class="hero-desc mx-auto">
                    A modern, beautifully crafted starter kit that gives you everything you need to launch your next Laravel project in minutes.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('register') }}" class="btn-hero-primary">
                        <i class="bi bi-rocket-takeoff"></i> Get Started Free
                    </a>
                    <a href="https://github.com/flightsadmin/bootstrap-starter-kit" class="btn-hero-outline" target="_blank">
                        <i class="bi bi-github"></i> View on GitHub
                    </a>
                </div>
            </div>
        </section>

        {{-- Features --}}
        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="hero-badge">Features</span>
                    <h2 style="font-size:2rem; font-weight:800; letter-spacing:-1px; margin-top:12px;">Everything you need</h2>
                    <p style="color:#8B8BA7; max-width:480px; margin:12px auto 0;">Packed with the essentials so you can skip the boilerplate and focus on what matters.</p>
                </div>
                <div class="row g-4 row-cols-1 row-cols-md-3">
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-icon" style="background:rgba(108,99,255,0.12);">
                                <i class="bi bi-lightning-charge-fill" style="color:#6C63FF;"></i>
                            </div>
                            <h5 style="font-family:'Syne',sans-serif; font-weight:700; margin-bottom:8px;">Lightning Fast</h5>
                            <p class="mb-0" style="color:#8B8BA7; font-size:14px; line-height:1.7;">Built on Vite and Livewire for a blazing-fast developer and user experience with zero page reloads.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-icon" style="background:rgba(67,233,123,0.12);">
                                <i class="bi bi-shield-fill-check" style="color:#43E97B;"></i>
                            </div>
                            <h5 style="font-family:'Syne',sans-serif; font-weight:700; margin-bottom:8px;">Secure by Default</h5>
                            <p class="mb-0" style="color:#8B8BA7; font-size:14px; line-height:1.7;">Auth scaffolding with email verification, password reset, and 2FA ready out of the box.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-icon" style="background:rgba(79,172,254,0.12);">
                                <i class="bi bi-sliders" style="color:#4FACFE;"></i>
                            </div>
                            <h5 style="font-family:'Syne',sans-serif; font-weight:700; margin-bottom:8px;">Fully Customizable</h5>
                            <p class="mb-0" style="color:#8B8BA7; font-size:14px; line-height:1.7;">SCSS variables, Bootstrap tokens, and a clean codebase make customization a breeze.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="main-footer mt-auto">
        <div class="container text-center">
            &copy; {{ date('Y') }} {{ config('app.name') }} &mdash; Built with ❤️ using Laravel &amp; Bootstrap
        </div>
    </footer>
</body>
</html>











