<?php
session_start();
?>
<!DOCTYPE HTML>
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
    <body>

        <?php include 'header.php'; ?>

        <section class="story-area left-text center-sm-text">
            
			<div class="container">
            <h4 class="mtb-20">Mes commandes :</h4>


            <div class="wrapper">
                <?php

                // Create connection
                $instance = ConnectDb::getInstance();
                $conn = $instance->getConnection();

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // récuprer la liste des commandes 
                $sql = "SELECT numero_commande,Heur,Adresse FROM Commande as c, Commande_Internet as ci where c.numero_commande=ci.Commande_numero_commande and ci.Verifie=0 and ci.Client_Login='".$_SESSION['id']."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $numero_commande = $row["numero_commande"];
                        $date = $row["Heur"];
                        $adresse = $row["Adresse"];
                                           
                        //afficher les info
                        echo "<div class='accordion'>".
                            "<div class='panel modify'>".       
							"<p><b>N° de commande : </b>".$numero_commande."</p>".							
                            "<p><b>Adresse : </b>".$adresse."</p>".               
                            "<p><b>Date : </b>".$date."</p>".
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
                        $result2 = $conn->query($sql);
                        while($row = $result2->fetch_assoc()) {
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
                            "<a class='p-10 mt-10 btn btn-danger' href='#'><b>Annuler</b></a>".
                            "</div>".
                            "</div>".
                            "</div>".
                            "</div>";
                    }	
					
                } else {
                    echo 'pas de commande a vérifier';
                }
                $conn->close();

                ?>
              
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
			
        </section>

    </body>
</html>