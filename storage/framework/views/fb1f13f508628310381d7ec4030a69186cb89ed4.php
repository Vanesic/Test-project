<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <title><?php echo e($product->name); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <style>
        th {
            width: 50%;
        }

        body {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
        }

        @media (min-width: 360px) and (max-width: 640px) {
            .pro-box-section .pro-box img {
                height: auto;
            }
        }
    </style>
</head>
<body>
<section class="py-3 py-md-5 py-xl-8">
    <div class="container rounded-5 p-4 ps-5" style="background: #f8fafc">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-xl-5 mt-5">
                <div class="col-md-9">
                    <div class="main-img">
                        <img class="img-fluid" src="<?php echo e(substr($photos[0]->path, 1)); ?>" alt="ProductS">
                        <div class="row my-3 previews">
                            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3">
                                    <img class="w-100" src="<?php echo e(substr($photo->path, 1)); ?>" alt="Sale">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <h2 class="h1 mb-3">Цена: <?php echo e($product->price); ?> руб.</h2>
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="h1 mb-3"><?php echo e($product->name); ?></h2>
                        <p class="lead fs-4 text-secondary mb-3"><?php echo e($product->description); ?></p>
                    </div>
                </div>
            </div>
            <h3 class="mb-3 mt-5">Характеристики:</h3>
            <div class="row">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row"><h4>Размер:</h4></th>
                        <td><h4><?php echo e($productProperties->size); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Цвет:</h4></th>
                        <td><h4><?php echo e($productProperties->color); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Бренд:</h4></th>
                        <td><h4><?php echo e($productProperties->brand); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Состав:</h4></th>
                        <td><h4><?php echo e($productProperties->composition); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Кол-во в упаковке:</h4></th>
                        <td><h4><?php echo e($productProperties->quantity_in_package); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Seo Title:</h4></th>
                        <td><h4><?php echo e($productProperties->seo_title); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Seo h1:</h4></th>
                        <td><h4><?php echo e($productProperties->seo_h1); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Seo Description:</h4></th>
                        <td><h4><?php echo e($productProperties->seo_description); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Вес товара:</h4></th>
                        <td><h4><?php echo e($productProperties->product_weight); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Ширина товара (мм):</h4></th>
                        <td><h4><?php echo e($productProperties->product_width); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Высота товара (мм):</h4></th>
                        <td><h4><?php echo e($productProperties->product_height); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Длина товара (мм):</h4></th>
                        <td><h4><?php echo e($productProperties->product_length); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Вес упаковки:</h4></th>
                        <td><h4><?php echo e($productProperties->package_weight); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Ширина упаковки (мм):</h4></th>
                        <td><h4><?php echo e($productProperties->package_width); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Высота упаковки (мм):</h4></th>
                        <td><h4><?php echo e($productProperties->package_height); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Длина упаковки (мм):</h4></th>
                        <td><h4><?php echo e($productProperties->package_length); ?></h4></td>
                    </tr>
                    <tr>
                        <th scope="row"><h4>Категория товара:</h4></th>
                        <td><h4><?php echo e($productProperties->product_category); ?></h4></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php /**PATH /var/www/resources/views/product.blade.php ENDPATH**/ ?>