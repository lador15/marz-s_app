<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="/home" class="navbar-brand">marz's App</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/home" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
                <a class="nav-link" href="/siswa">Data Siswa</a>
                <a class="nav-link" href="/guru">Data Guru</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/marz_app/marz_app/resources/views/layouts/app.blade.php ENDPATH**/ ?>