<!DOCTYPE HTML>
<?php
ob_start();
session_start();
?>
<?php include 'ConnectDB.php'; ?>
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

        <!-- SCIPTS -->     
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>

    </head>



    <body id="ver-com">


        <div class="container">
            <h4 class="mtb-20">Commandes en attente de validation :</h4>


            <div class="wrapper">
                <?php

                // Create connection
                $instance = ConnectDb::getInstance();
                $conn = $instance->getConnection();

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // récuprer la liste des commandes faites par internet et non verifier
                $sql = "SELECT numero_commande,Heur,Adresse,Client_Login FROM Commande as c, Commande_Internet as ci where c.numero_commande=ci.Commande_numero_commande and ci.Verifie=0";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $numero_commande = $row["numero_commande"];
                        $heur = $row["Heur"];
                        $adresse = $row["Adresse"];
                        $login = $row["Client_Login"];

                        //récuperer telephone du client internet
                        $sql = "SELECT Telephone FROM Client where Login=".$login;
                        $result2 = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            $telephone = $row["Client_Login"];	
                        }

                        //afficher les info
                        echo "<div class='accordion'>".
                            "<div class='panel modify'>".
                            "<p><b>Username : </b>".$login."</p>".
                            "<p><b>N° de téléphone : </b>0".$telephone."</p>".
                            "<p><b>Adresse : </b>".$adresse."</p>".
                            "<p><b>N° de commande : </b>".$numero_commande."</p>".
                            "<p><b>Date : </b>".$heur."</p>".
                            "</div>".
                            "<div class='panel-content'>".
                            "<table class='com-ver'>".
                            "<tr>".
                            "<th>Intitulé</th>".
                            "<th>Prix unité (DA)</th>".
                            "<th>Quantité</th>".
                            "</tr>";


                        //recuprer les elements commandés
                        $sql = "SELECT Intitule,Prix,Quantite FROM Element_menu,Element_Commande where Commande_numero_commande=".$numero_commande." and Element_Commande.Element_menu_Intitule=Element_menu.Intitule";
                        $result3 = $conn->query($sql);
                        while($row = $result3->fetch_assoc()) {
                            //afficher les elements commandés
                            echo "<tr>".
                                "<td>".$row["Intitule"]."</td>".
                                "<td>".$row["Prix"]." DA</td>".
                                "<td>".$row["Quantite"]."</td>".
                                "</tr>";
                        }
                        echo "</table>".
                            "<div class='dplay-tbl'>".
                            "<div class='dplay-tbl-cell center-text'>".
                            "<a class='p-10 mt-10 btn btn-success' href='#'><b>Accepter</b></a>".
                            "<a class='p-10 mt-10 btn btn-danger' href='#'><b>Refuser</b></a>".
                            "</div>".
                            "</div>".
                            "</div>".
                            "</div>";
                    }	

                    //$_SESSION['valid'] = true;
                    //$_SESSION['timeout'] = time();
                    //$row = $result->fetch_assoc();
                    //$_SESSION['username'] = $row["login"];


                } else {
                    echo 'pas de commande a vérifier';
                }
                $conn->close();

                ?>
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
                        <div class="dplay-tbl">
                            <div class="dplay-tbl-cell center-text">
                                <a class="p-10 mt-10 btn btn-success" href="#"><b>Accepter</b></a>
                                <a class="p-10 mt-10 btn btn-danger" href="#"><b>Refuser</b></a>
                            </div>
                        </div>
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