<?php
			session_start();
            session_regenerate_id();
?>
<html lang="en">
    <head>
        <title>Serbili</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <link href="common/styles.css" rel="stylesheet">

    </head>
    <body>

        <?php include 'header.php'; ?>


        <section class="bg-1 h-900x main-slider pos-relative">
            <div class="triangle-up pos-bottom"></div>
            <div class="container h-100">
                <div class="dplay-tbl">
                    <div class="dplay-tbl-cell center-text color-white">

                        <h5><b>Restaurant</b></h5>
                        <h1 class="mt-30 mb-15">Serbili</h1>
                        <h5><a href="03_menu.php" class="btn-primaryc plr-25"><b>Découvrir le Menu</b></a></h5>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>


        <div class="story-area left-text center-sm-text pos-relative">
            <div class="abs-tbl bg-2 w-15 z--1 dplay-md-none"></div>
            <div class="abs-tbr bg-3 w-15 z--1 dplay-md-none"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="heading">
                            <img class="heading-img" src="images/pizza.png" alt="">
                            <h4>Côté cuisine</h4>
                            <p class="mb-30">Le produit est au centre, on ne transige pas ni avec la saison ni avec le goût : on cherche à sublimer les saveurs par des alliances ordonnées tout en respectant leurs essences.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="heading">
                            <img class="heading-img" src="images/store.png" alt="">
                            <h4>Côté salle</h4>
                            <p class="mb-30">Le temps du repas, on profite d’une salle où cuisine et service sont offerts à la vue de chacun de manière à faire de ce moment un instant de partage et d’échanges.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="heading">
                            <img class="heading-img" src="images/chef.png" alt="">
                            <h4>Côté humain</h4>
                            <p class="mb-30">Une équipe de professionnels en cuisine et en salle avec qui l’on partage, le temps du repas, une expérience privilégiée.</p>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div>

        <?php include 'menuIndex.php'; ?>

        <?php include 'footer.php'; ?>

        <?php include 'scripts.php'; ?>

    </body>
</html>