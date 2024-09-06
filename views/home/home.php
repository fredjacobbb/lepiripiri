<?php ob_start(); ?>

<div class="position-relative d-flex align-items-center vh-50">
    <video autoplay muted loop type="video/mp4" class="w-100">
        <source src="public/assets/img/30190279-preview.mp4" type="video/mp4">
    </video>
    
    <div class="d-flex align-items-center w-100 align-content-center position-absolute banner-home p-4">
        <!-- <h2 class="text-success d-none d-sm-block text-light text-uppercase text-start fw-bolder">Un moment de partage et de convivialité autour d'une table aux saveurs portugaises.</h2> -->
        <!-- <img class="w-25 m-5 d-none d-sm-block" src="public/assets/img/piment.png" alt=""> -->
    </div>
</div>

<div class="d-flex flex-wrap gap-3 justify-content-around">
    <h3 class="text-light d-inline bg-secondary my-5 p-1 text-center px-3">LE CONCEPT</h3>
    <div class="mx-2 mx-sm-5">
        <p class="display-6 fs-4 p-1 p-sm-5"><i class="fs-1">"</i>Nous vous accueillons dans un endroit chaleureux où les saveurs authentiques du Portugal s'invitent à votre table. Laissez-vous tenter par nos plats traditionnels, préparés avec des produits frais et de qualité, dans une ambiance conviviale.</p>
    </div>
</div>

<div class="d-flex flex-wrap gap-3 justify-content-around">
    <h3 class="text-light d-inline bg-secondary my-5 p-1 text-center px-3">NOS SPÉCIALITÉS</h3>
    <!-- <div>
        <div class="col-12 col-md-8">

        </div>
        <div class="col-12 col-md-4">
            <div>
                <h4>Poulet Piri Piri</h4>
                <p class="p-3"><img class="img mw-100" src="public/assets/img/poulet-complet.jpg" alt=""></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div>
            <h4>Saucisses</h4>
            <p><img class="img mw-100" src="public/assets/img/saucisses.jpg" alt=""></p>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div>
            <h4>Ribs de porc</h4>
            <p><img class="img mw-100" src="public/assets/img/travers-porc.webp" alt=""></p>
        </div>
    </div> -->
</div>

<?php $view = ob_get_clean() ?>