<?php $__env->startSection('title', 'Tambah Data Guru'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Form Tambah Data Guru</h1>
    <form method="POST">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="<?php echo e((isset($guru)) ? $guru->nama : ''); ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo e((isset($guru)) ? $guru->email : ''); ?>"></td>
            </tr>
            <tr>
                <td>Wali Kelas</td>
                <td><input type="text" name="wali_kelas" value="<?php echo e((isset($guru)) ? $guru->wali_kelas : ''); ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-warning" href="<?php echo e(url('/guru')); ?>" role="button">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/marz_app/marz_app/resources/views/guru/form.blade.php ENDPATH**/ ?>