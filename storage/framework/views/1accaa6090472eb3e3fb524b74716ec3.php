

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
    <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary btn-sm shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4 col-md-8 px-0">
    <div class="card-header py-3 bg-light">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-tag mr-2"></i>Form Kategori Baru</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('categories.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name" class="font-weight-bold text-dark">Nama Kategori</label>
                <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="Contoh: Otomotif, Politik, Hiburan" required autofocus>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <small class="text-muted d-block mt-1">Slug/URL ramah SEO akan dibuat otomatis berdasarkan nama kategori ini.</small>
            </div>

            <hr>
            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary shadow-sm"><i class="fas fa-save mr-1"></i> Simpan Kategori</button>
                <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary shadow-sm">Batal</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\webberita\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>