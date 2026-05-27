

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Kategori</h1>
    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary btn-sm shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori
    </a>
</div>

<?php if(session('success')): ?>
<div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
    <i class="fas fa-check-circle mr-1"></i> <?php echo e(session('success')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(session('error')): ?>
<div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
    <i class="fas fa-exclamation-circle mr-1"></i> <?php echo e(session('error')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(session('info')): ?>
<div class="alert alert-info alert-dismissible fade show shadow-sm" role="alert">
    <i class="fas fa-info-circle mr-1"></i> <?php echo e(session('info')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori Berita</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th width="10%" class="text-center">No</th>
                        <th>Nama Kategori</th>
                        <th>Slug (URL)</th>
                        <th width="25%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                        <td><strong><?php echo e($category->name); ?></strong></td>
                        <td><code class="text-secondary"><?php echo e($category->slug); ?></code></td>
                        <td class="text-center">
                            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-warning btn-sm shadow-sm">
                                <i class="fas fa-edit fa-xs"></i> Edit
                            </a>
                            <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm shadow-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini? Data yang terhapus tidak dapat dikembalikan!')">
                                    <i class="fas fa-trash fa-xs"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">
                            <i class="fas fa-folder-open fa-2x mb-2 d-block"></i> Belum ada data kategori. Silakan tambahkan kategori baru.
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\webberita\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>