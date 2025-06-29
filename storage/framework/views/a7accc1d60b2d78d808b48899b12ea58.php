<?php $__env->startSection('title', 'List Guru'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Data Guru</h1>
    <?php if($message = Session::get('message')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('message')); ?>

        </div>
    <?php endif; ?>
    <a class="btn btn-success" href="<?php echo e(url('/guru/insert')); ?>" role="button">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Wali Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($guru->nama); ?></td>
                <td><?php echo e($guru->email); ?></td>
                <td><?php echo e($guru->wali_kelas); ?></td>
                <td>
                    <a class="btn btn-warning" href="<?php echo e(url('/guru/update/'.$guru->id)); ?>" role="button">Ubah</a>
                    <a class="btn btn-danger" href="<?php echo e(url('/guru/delete/'.$guru->id)); ?>" role="button">Hapus</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a class="btn btn-primary" href="<?php echo e(url('/guru/mapel')); ?>" role="button">Data Mata Pelajaran</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/marz_app/marz_app/resources/views/guru/list.blade.php ENDPATH**/ ?>