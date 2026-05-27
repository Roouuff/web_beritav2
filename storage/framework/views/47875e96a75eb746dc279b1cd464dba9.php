<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"
                        style="background: linear-gradient(135deg, #4e73df 0%, #224abe 100%); min-height: 400px; display:flex; align-items:center; justify-content:center;">
                        <div class="text-center text-white p-5">
                            <i class="fas fa-boxes fa-5x mb-3 opacity-75"></i>
                            <h3 class="font-weight-bold">Welcome Back!</h3>
                            <p class="mb-0">Sign in to access your dashboard and manage your data.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul class="mb-0 ps-3">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="inputEmail" name="email" value="<?php echo e(old('email')); ?>"
                                        placeholder="Enter Email Address..." required autofocus>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-user <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="inputPassword" name="password" placeholder="Password" required>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck"
                                            name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>

                                <hr>

                                <a href="<?php echo e(url('/')); ?>" class="btn btn-google btn-user btn-block">
                                    <i class="fas fa-home fa-fw"></i> Back to Home
                                </a>
                            </form>

                            <hr>

                            <div class="text-center">
                                <?php if(Route::has('password.request')): ?>
                                    <a class="small" href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
                                <?php endif; ?>
                            </div>
                            <div class="text-center">
                                <?php if(Route::has('register')): ?>
                                    <a class="small" href="<?php echo e(route('register')); ?>">Create an Account!</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\praktikum-11\resources\views/auth/login.blade.php ENDPATH**/ ?>