<?php

session_start();
?>
<!DOCTYPE HTML>
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


        <section class="bg-6 h-500x main-slider pos-relative">
            <div class="triangle-up pos-bottom"></div>
            <div class="container h-100">
                <div class="dplay-tbl">
                    <div class="dplay-tbl-cell center-text color-white pt-90">
                        <h5><b>SAY HELLO</b></h5>
                        <h3 class="mt-30 mb-15">Contact</h3>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>


        <section class="story-area left-text center-sm-text">
            <div class="container">
                <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Say hello</h2>
                    <h5 class="mt-10 mb-30">Say hello, send us a message</h5>
                    <p class="mx-w-700x mlr-auto">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium
                        elit elementum quis. Enean porttitor eros non ultrices convallis.
                        Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem.
                        Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus</p>
                </div>

                <form class="form-style-1 placeholder-1">
                    <div class="row">
                        <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Name">  </div>
                        <div class="col-md-6"> <input class="mb-20" type="text" placeholder="E-mail">  </div>
                        <div class="col-md-12"><input class="mb-20" type="text" placeholder="Subject">  </div>
                        <div class="col-md-12">
                            <textarea class="h-200x ptb-20" placeholder="Message"></textarea></div>
                    </div><!-- row -->
                    <h6 class="center-text mtb-30"><a href="#" class="btn-primaryc plr-25"><b>SEND MESSAGE</b></a></h6>
                </form>
            </div><!-- container -->
        </section>


        <div class="map-area h-700x mb--30">
            <div id="map" style="height:100%;"></div>
        </div><!-- map-area -->

        <?php include 'footer.php'; ?>

        <?php include 'scripts.php'; ?>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap"></script>

    </body>
</html>