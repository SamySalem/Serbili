<!DOCTYPE HTML>
<?php
ob_start();
session_start();
?>
<?php include 'ConnectDB.php'; ?>
<html lang="fr">
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


        <<?php include 'header.php'; ?>

        <section class="counter-section section center-text mt--60" id="counter">
            <div class="container col-md-4 rounded mx-auto d-block">
                <form class="form-style-1 placeholder-1" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
                    <div class="row">
                        <h4 class="mb-10 ml-20">Authentification :</h4>
                        <div class="col-md-12"><input class="mb-20" name='login' type="text" placeholder="Pseudo">  </div>
                        <div class="col-md-12"><input class="mb-20" name='password' type="password" placeholder="Mot de passe">  </div>
                    </div><!-- row -->
                    <h6 class="center-text mb-30"><button name="log" type='submit' href="#" class="btn-primaryc plr-25"><b>Connexion</b></button></h6>
                </form>
				<?php
						
				if (isset($_POST['log']) && !empty($_POST['login']) 
				&& !empty($_POST['password'])) {
                
				// Create connection
				$instance = ConnectDb::getInstance();
				$conn = $instance->getConnection();

				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
        
				$sql = "SELECT * FROM Client where Login='".$_POST['login']."' and Password='".$_POST['password']."'";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$_SESSION['id']= $row['Login'];
				$_SESSION['authenticated']=true;
				header("Location: index.php");
				}else{
				echo "Votre pseudo ou mots de passe est incorrecte"; 
				}
				$conn->close();
				}
				?>
                <div class="hline"></div>
                <form class="form-style-1 placeholder-1" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
                    <div class="row">
                        <p class="col-12 font-13">Vous n'avez pas un compte?</p>
                        <h4 class="mb-10 ml-20">Inscription :</h4>
                        <div class="col-md-12"><input class="mb-20" type="text" name='login2' placeholder="Pseudo">  </div>
                        <div class="col-md-12"><input class="mb-20" type="password" name='password2' placeholder="Mot de passe">  </div>
                        <div class="col-md-12"><input class="mb-20" type="number" name='telephone' placeholder="Téléphone">  </div>
                    </div><!-- row -->
                    <h6 class="center-text"><button name="register" type='submit' href="#" class="btn-primaryc plr-25"><b>s'inscrire</b></button></h6>
                </form>
				<?php
						
				if (isset($_POST['register']) && !empty($_POST['login2']) 
				&& !empty($_POST['password2']) && !empty($_POST['telephone'])) {
                
				// Create connection
				$instance = ConnectDb::getInstance();
				$conn = $instance->getConnection();

				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
        
				$sql = "INSERT INTO Client VALUES ('".$_POST['login2']."', '".$_POST['password2']."',0, ".$_POST['telephone'].")";
				
				
				if($conn->query($sql) === TRUE){
				echo "<a>Inscription réussite veuillez vous authentifier ci dessus.</a>"; 
				}
				else{
				echo "<a>Ce pseudo est deja utiliser veuillez en choisir un autre.</a>";
					
				}
				$conn->close();
				}
				?>
            </div><!-- container-->
        </section><!-- counter-section-->

        <?php include 'footer.php'; ?>

        <?php include 'scripts.php'; ?>
    </body>
</html>