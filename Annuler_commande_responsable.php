<?php
session_start();
?>
<!DOCTYPE HTML>
<?php include 'ConnectDB.php'; ?>
<html>
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
        <link href="fonts/fa/css/fontawesome-all.min.css" rel="stylesheet">
		
		<!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>
		
    </head>
    <body>
	
        <?php include 'header_employe.php'; ?>
        
        <div class="container">
            <table class="table table-hover tableau mt-20">
			<thead class="thead-dark">
                    <tr>
                        <th>Commande N°</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Type</th>
                        <th>Table N°</th>
                    </tr>
                </thead>
                <tbody>
			<?php

                // Create connection
                $instance = ConnectDb::getInstance();
                $conn = $instance->getConnection();

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // récuprer la liste des commandes 
                $sql = "SELECT numero_commande,Heur,Type,numero_table FROM Commande as c, Commande_Locale as cl where c.Etat='en attente' and c.numero_commande=cl.Commande_numero_commande";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $numero_commande = $row["numero_commande"];
                        $date = $row["Heur"];
						$numero_table = $row["numero_table"];
						$type = $row["Type"];
                                           
                        //afficher les info
                        echo "<tr class='commande'>".
                        "<th>".$numero_commande."</th>".
                        "<td>01/01/2019</td>".
                        "<td>13:15</td>".
                        "<td>".$type."</td>".
                        "<td>".$numero_table."</td>".
                    "</tr>";	
                    }	
					
                } else {
                    echo 'Aucune commande';
                }
                $conn->close();

                ?>              
                </tbody>
            </table>
        </div>
        <style>
            .selected{
                background-color: #fab2b2;
            }
        </style>

        <script>
            $( ".commande" ).click(function() {
                $(".commande").removeClass("selected");
                $( this ).toggleClass("selected");
            });	
        </script>
        <h5 class="anl-cmd"><a class="p-10 mb-10 btn btn-danger" href="#"><b>Annuler</b></a></h5>

    </body>
</html>