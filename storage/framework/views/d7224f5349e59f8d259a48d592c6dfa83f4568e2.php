<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main page</title>


    <!-- Bootstrap core CSS -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

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

</head>
<body class="bg-light">
<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex border-bottom p-2">
            <h5 class="mt-2">Список товаров</h5>
            <button type="button" class="btn btn-outline-success ms-auto">Импортировать файл</button>
        </div>
        <div class="list-group list-group-flush pt-3">
            <a href="#" class="list-group-item list-group-item-action d-flex  border-bottom">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff"/>
                    <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>

                <p class="pb-3 mb-0">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Some representative placeholder content, with some information about this user. Imagine this being
                    some
                    sort of status update, perhaps?
                </p>
            </a>
        </div>
    </div>
</main>
</body>
</html>
