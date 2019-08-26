<!DOCTYPE html>
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


        <header>
            <div class="container">
                <a class="logo" href="#"><img src="images/logo-white.png" alt="Logo"></a>

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <div class="right-area mr-40">
                    <h6>
                        <a class="plr-20 mr-15 color-white btn-fill-primary" href="#">COMMANDER: +213 558 74 69 73</a>
                    </h6>
                </div><!-- right-area -->

                <ul class="main-menu font-mountainsre" id="main-menu">
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="02_about_us.php">A PROPOS DE NOUS</a></li>
                    <li><a href="03_menu.php">MENU</a></li>
                    <li><a href="05_contact.php">CONTACTEZ NOUS</a></li>
                </ul>

                <div class="clearfix"></div>
            </div><!-- container -->
        </header>

        <section class="bg-7 h-100x">
        </section>

        <section class="counter-section section center-text mt--60" id="counter">
            <div class="container col-md-4 rounded mx-auto d-block">
                <form class="form-style-1 placeholder-1">
                    <div class="row">
                        <h4 class="mb-10 ml-20">Login :</h4>
                        <div class="col-md-12"><input class="mb-20" type="text" placeholder="Pseudo">  </div>
                        <div class="col-md-12"><input class="mb-20" type="text" placeholder="Mot de passe">  </div>
                    </div><!-- row -->
                    <h6 class="center-text mb-30"><a href="#" class="btn-primaryc plr-25"><b>Connexion</b></a></h6>
                </form>
                <div class="hline"></div>
                <form class="form-style-1 placeholder-1">
                    <div class="row">
                        <p class="col-12 font-13">Vous n'avez pas un compte?</p>
                        <h4 class="mb-10 ml-20">inscrire :</h4>
                        <div class="col-md-12"><input class="mb-20" type="text" placeholder="Pseudo">  </div>
                        <div class="col-md-12"><input class="mb-20" type="text" placeholder="Mot de passe">  </div>
                        <div class="col-md-12"><input class="mb-20" type="number" placeholder="Téléphone">  </div>
                    </div><!-- row -->
                    <h6 class="center-text"><a href="#" class="btn-primaryc plr-25"><b>Inscription</b></a></h6>
                </form>
            </div><!-- container-->
        </section><!-- counter-section-->

        <?php include 'footer.php'; ?>

        <!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>
    </body>
</html>