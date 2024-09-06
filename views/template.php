<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le piri-piri</title>
    <link rel="icon" type="image/x-icon" href="public/assets/img/brand.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body class="position-relative">
    <header class="overflow-y-hidden py-3">
        <div class="d-flex justify-content-between align-items-center mx-sm-5">

            <div class="fs-4">
                <a href="./">
                    <img class="mx-2" src="public/assets/img/brand.png" alt="brand" srcset="">
                </a>
            </div>

            <nav class="d-none d-md-block align-items-center justify-content-end">
                <ul class="d-sm-flex justify-content-end gap-2">
                    <li class="py-3 mx-md-2 mx-0 text-light"><i class="bi bi-house-door-fill px-2 text-dark"></i><a class="link-offset-3 active-link" href="">Accueil</a></li>
                    <li class="py-3 mx-md-2 mx-0 text-light"><i class="bi bi-alarm-fill px-2 text-dark"></i><a href="">Les horaires</a></li>
                    <li class="py-3 mx-md-2 mx-0 text-light"><i class="bi bi-book-fill px-2 text-dark"></i><a href="">La carte</a></li>
                    <li class="py-3 mx-md-2 mx-0 text-light"><i class="bi bi-telephone-fill px-2 text-dark"></i><a href="">Nous contacter</a></li>
                </ul>
            </nav>

            <div class="d-md-none">
                <div class="container-icons-menu mx-3">
                    <i class="bi bi-list fs-0 btn-open-menu pe-auto"></i>
                    <i class="bi bi-x fs-0 d-none btn-close-menu pe-auto"></i>
                </div>
            </div>
            
        </div>
        <nav class="position-absolute top-0 offset-canvas text-center d-md-none align-content-center align-items-center"> 
            <ul class="list-group list-group-flush">
                <li class="py-3 fs-1"><a href="">Accueil</a></li>
                <li class="py-3 fs-1"><a href="">Les horaires</a></li>
                <li class="py-3 fs-1"><a href="">La carte</a></li>
                <li class="py-3 fs-1"><a href="">Nous contacter</a></li>
            </ul>
        </nav>

    </header>

    <?= $view ?>

    <footer class="row justify-content-center text-center">
        <div class="col-12 col-md-3">
            <p class="fw-medium fs-4">Le Piri Piri</p>
        </div>
        <div class="col-12 col-md-3">
            <p class="fw-medium fs-4">Le Piri Piri</p>
        </div>
        <div class="col-12 col-md-3">
            <p class="fw-medium fs-4">Le Piri Piri</p>
        </div>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/style-animation.js"></script>
</body>
</html>