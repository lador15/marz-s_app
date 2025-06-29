<?php $__env->startSection('title', 'Data Wali'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Data Wali</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Nama Wali</th>
            <th>Pekerjaan Wali</th>
            </tr>
            <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($siswa->nama); ?></td>
                <td><?php echo e($siswa->email); ?></td>
                <td><?php echo e($siswa->kelas); ?></td>
                <td><?php echo e($siswa->wali->nama_wali); ?></td>
                <td><?php echo e($siswa->wali->pekerjaan); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/marz_app/marz_app/resources/views/siswa/wali.blade.php ENDPATH**/ ?>