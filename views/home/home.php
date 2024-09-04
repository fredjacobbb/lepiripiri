<?php ob_start(); ?>

<div class="position-relative d-flex align-items-center vh-50">

    <video autoplay muted loop type="video/mp4" class="w-100">
        <source src="public/assets/img/30190279-preview.mp4" type="video/mp4">
    </video>
    
    <div class="d-flex align-items-center align-content-center position-absolute banner-home p-4">
        <h2 class="text-light text-uppercase text-start fw-bolder">Un moment de partage et de convivialité autour d'une table aux saveurs portugaises.</h2>
        <img class="w-25 m-5" src="public/assets/img/chili.png" alt="">
    </div>
</div>

<?php $view = ob_get_clean() ?>