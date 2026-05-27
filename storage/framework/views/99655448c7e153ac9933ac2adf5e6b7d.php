<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4 text-center">
        <h1 class="display-5 fw-bold mb-3">
            <i class="bi bi-boxes me-2"></i> <?php echo e(config('app.name', 'Laravel')); ?>

        </h1>
        <p class="lead mb-4 opacity-75">
            Praktikum 11 — Blade Laravel, Auth Laravel & Integrasi Template SB Admin 2
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-light btn-lg">
                    <i class="bi bi-grid-fill me-2"></i> Go to Dashboard
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-light btn-lg">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Login
                </a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-person-plus me-2"></i> Register
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Topik yang Dipelajari</h2>
            <p class="text-muted">Praktikum 11 — Pemrograman Web</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <span class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-3">
                            <i class="bi bi-file-code fs-2 text-primary"></i>
                        </span>
                    </div>
                    <h5 class="fw-bold">Blade Laravel</h5>
                    <p class="text-muted small mb-0">
    Penggunaan @extends, @section, @yield,
    dan directive Blade seperti @foreach, @if, @auth.
</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <span class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-3">
                            <i class="bi bi-shield-lock fs-2 text-success"></i>
                        </span>
                    </div>
                    <h5 class="fw-bold">Auth Laravel</h5>
                    <p class="text-muted small mb-0">
                        Autentikasi dengan login, register, logout,
                        middleware auth & guest, dan proteksi route.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <span class="bg-warning bg-opacity-10 rounded-circle d-inline-flex p-3">
                            <i class="bi bi-layout-sidebar fs-2 text-warning"></i>
                        </span>
                    </div>
                    <h5 class="fw-bold">SB Admin 2</h5>
                    <p class="text-muted small mb-0">
                        Template admin Bootstrap 4 dengan sidebar, topbar, chart,
                        yang diintegrasikan sebagai layout admin.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Table Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold mb-4 text-center">Route Utama</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped bg-white shadow-sm rounded">
                <thead class="table-primary">
                    <tr>
                        <th>Method</th>
                        <th>URI</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>GET</code></td>
                        <td><code>/</code></td>
                        <td>Halaman publik (home)</td>
                    </tr>
                    <tr>
                        <td><code>GET</code></td>
                        <td><code>/dashboard</code></td>
                        <td>Dashboard admin <span class="badge bg-warning text-dark ms-1">Auth</span></td>
                    </tr>
                    <tr>
                        <td><code>GET/POST</code></td>
                        <td><code>/login</code></td>
                        <td>Halaman login</td>
                    </tr>
                    <tr>
                        <td><code>GET/POST</code></td>
                        <td><code>/register</code></td>
                        <td>Halaman register</td>
                    </tr>
                    <tr>
                        <td><code>POST</code></td>
                        <td><code>/logout</code></td>
                        <td>Logout</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Auth Status Section -->
<section class="py-5">
    <div class="container text-center">
        <?php if(auth()->guard()->check()): ?>
            <div class="alert alert-success d-inline-block px-5 shadow-sm">
                <i class="bi bi-person-check-fill me-2 fs-5"></i>
                Halo, <strong><?php echo e(auth()->user()->name); ?></strong>! Kamu sedang login.
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-sm btn-success ms-3">Dashboard</a>
            </div>
        <?php else: ?>
            <div class="alert alert-info d-inline-block px-5 shadow-sm">
                <i class="bi bi-info-circle me-2"></i>
                Kamu belum login.
                <a href="<?php echo e(route('login')); ?>" class="btn btn-sm btn-primary ms-2">Login</a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-sm btn-outline-primary ms-1">Register</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\praktikum-11\resources\views/public/home.blade.php ENDPATH**/ ?>