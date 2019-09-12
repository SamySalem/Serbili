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
		
		<!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>
    </head>
    <body>

        <?php include 'header_employe.php'; ?>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="row" align='center'>
			<div class="col-lg-12">
			  <p>
				<a href="Prendre_commande_serveur.php" class="btn square btn-danger">
				  <i class="fa fa-user fa-5x"></i><br/>
				   <br>Prendre une commande
				</a>
				<a href="Annuler_commande_serveur.php" class="btn square btn-danger">
				  <i class="fa fa-user fa-5x"></i><br/>
				   <br>Annuler une commande
				</a>
			  </p>
			</div>
		</div>
		</body>
		<style>
		.square {
		width: 400px;
		height: 280px;
		}
		</style>
		</html>