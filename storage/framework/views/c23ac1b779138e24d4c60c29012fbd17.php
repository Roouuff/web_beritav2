<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', config('app.name', 'Laravel')); ?></title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo e(url('/')); ?>">
                <i class="bi bi-boxes me-1"></i> <?php echo e(config('app.name', 'Laravel')); ?>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-center gap-1">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a class="btn btn-light btn-sm" href="<?php echo e(route('dashboard')); ?>">
                                <i class="bi bi-grid-fill me-1"></i> Dashboard
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light btn-sm" href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    
    <main class="flex-grow-1">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <small>&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name', 'Laravel')); ?>. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\webberita\resources\views/layouts/app.blade.php ENDPATH**/ ?>