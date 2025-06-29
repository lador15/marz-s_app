<?php $__env->startSection('title', 'Data Mata Pelajaran'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Data Mata Pelajaran</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Wali Kelas</th>
            <th>Nama Mata Pelajaran</th>
            </tr>
            <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($guru->nama); ?></td>
                <td><?php echo e($guru->email); ?></td>
                <td><?php echo e($guru->wali_kelas); ?></td>
                <td><?php echo e($guru->mapel->nama); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/marz_app/marz_app/resources/views/guru/mapel.blade.php ENDPATH**/ ?>