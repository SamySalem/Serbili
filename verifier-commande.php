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
    <body id="ver-com">

        <?php include 'scripts.php'; ?>

        <div class="container">
            <h4 class="mtb-20">Commandes en attente de validation :</h4>


            <div class="wrapper">
                <div class="accordion">
                    <div class="panel modify">
                        <p><b>Username : </b>anisanis</p>
                        <p><b>N° de téléphone : </b>0558247590</p>
                        <p><b>Adresse : </b>Zouaghi, constantine.</p>
                        <p><b>N° de commande : </b>4502</p>
                        <p><b>Date : </b>05/08/2019 13:18</p>
                    </div>
                    <div class="panel-content">
                        <table class="com-ver">
                            <tr>
                                <th>Intitulé</th>
                                <th>Prix unité (DA)</th>
                                <th>Quantité</th>
                            </tr>
                            <tr>
                                <td>Salade variee</td>
                                <td>200 DA</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Shawarma plat</td>
                                <td>400 DA</td>
                                <td>2</td>
                            </tr>
                        </table>
                        <div class="dplay-tbl">
                            <div class="dplay-tbl-cell center-text">
                                <a class="p-10 mt-10 btn btn-success" href="#"><b>Accepter</b></a>
                                <a class="p-10 mt-10 btn btn-danger" href="#"><b>Refuser</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <div class="panel modify">
                        <p><b>Username : </b>anisanis</p>
                        <p><b>N° de téléphone : </b>0558247590</p>
                        <p><b>Adresse : </b>Zouaghi, constantine.</p>
                        <p><b>N° de commande : </b>4502</p>
                        <p><b>Date : </b>05/08/2019 13:18</p>
                    </div>
                    <div class="panel-content">
                        <table class="com-ver">
                            <tr>
                                <th>Intitulé</th>
                                <th>Prix unité (DA)</th>
                                <th>Quantité</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Salade variee</td>
                                <td>200 DA</td>
                                <td>3</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Shawarma plat</td>
                                <td>400 DA</td>
                                <td>2</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <style>
            .modify-radius {
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            .modify-radiu{
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
            }
        </style>

        <script>
            $(document).ready(function(){
                $(".panel").click(function(){
                    $(this).toggleClass("modify-radius");
                    $(this).next().toggleClass("modify-radiu");
                    $(this).next().slideToggle('medium');
                    $(this).parent().siblings().find('.panel-content').slideUp();
                });
            });
        </script>


    </body>
</html>