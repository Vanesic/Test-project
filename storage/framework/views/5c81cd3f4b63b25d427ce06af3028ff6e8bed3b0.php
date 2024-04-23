<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <title>Import Excel</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">

<form action="<?php echo e(url('/import')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="cover-container w-100 h-100 p-3 justify-content-center flex-column">
        <main class="mt-5">
            <h1 class="mb-5">Загрузите excel файл для импорта</h1>
            <p class="lead d-flex justify-content-center">
                <input type="file" name="file" class="form-control w-auto me-2"/>
                <button type="submit" class="btn btn-success">Загрузить</button>
            </p>
        </main>
    </div>
</form>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\test-task\resources\views/import.blade.php ENDPATH**/ ?>