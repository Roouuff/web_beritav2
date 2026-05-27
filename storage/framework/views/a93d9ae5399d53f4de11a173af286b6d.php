

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Pengguna</h1>
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn-sm shadow-sm">
        <i class="fas fa-user-plus fa-sm text-white-50"></i> Tambah Pengguna
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

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna Sistem (Admin & Penulis)</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th width="10%" class="text-center">No</th>
                        <th>Nama Pengguna</th>
                        <th>Alamat Email</th>
                        <th>Tanggal Terdaftar</th>
                        <th width="25%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                        <td>
                            <strong><?php echo e($user->name); ?></strong>
                            <?php if($user->id === auth()->id()): ?>
                                <span class="badge badge-success ml-1 shadow-sm">Aktif Login</span>
                            <?php endif; ?>
                        </td>
                        <td><code><?php echo e($user->email); ?></code></td>
                        <td><?php echo e($user->created_at->format('d M Y H:i')); ?> WIB</td>
                        <td class="text-center">
                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-warning btn-sm shadow-sm">
                                <i class="fas fa-edit fa-xs"></i> Edit
                            </a>
                            <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm shadow-sm" 
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini? Semua data relasional profil dan artikelnya akan ikut terhapus permanen!')"
                                    <?php echo e($user->id === auth()->id() ? 'disabled' : ''); ?>>
                                    <i class="fas fa-trash fa-xs"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">
                            <i class="fas fa-users-slash fa-2x mb-2 d-block"></i> Belum ada data pengguna.
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\webberita\resources\views/admin/users/index.blade.php ENDPATH**/ ?>