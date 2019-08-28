<?php include 'ConnectDB.php'; ?>
<html>
    <head>
        <title>Menu Caissier</title>
    </head>
    <body>
    
                      <div class="main container mt-3">
                        <div class="content bg-light rounded">
                        <form align="center" id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="pt-3 choix">
                            <span class="mr-5">
                                <label for="radio1">Numéro de table :</label>
                                <input type="radio" id="radio1" name="choix" value="numero_table" checked>
                            </span>
                            <span>
                                <label for="radio2">Numéro de commande :</label>
                                <input type="radio" id="radio2" name="choix" value="numero_commande">
                            </span>
                        </div>
                        <div id="choix1">
                            <p for="intput1">veuillez entrer le numéro de table :</p>
                            <input id="input1" name="num_table" type="number">
                        </div>

                        <div id="choix2">
                            <p>veuillez entrer le numero de commande:</p>
                            <input id="input2" name="num_commande" type="number">
                        </div>
                        <button class="btn btn-info btn-md btn-block text-uppercase mt-3 mb-1" type="submit" name="Encaisser"><i class="fas fa-calendar-check"></i> Encaisser</button>
                        <div id="resultat" class="mb-3"></div>
                        <input type="hidden" name="hidden" value="CalculerRecette">
                    </form>
                </div>
            </div>
        </body>
		
		<?php
		
		// define variables and set to empty values
     	$num_table = $num_commande = "";		

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$num_table = test_input($_POST["num_table"]);
		$num_commande = test_input($_POST["num_commande"]);
		}
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		 
        if (isset($_POST['Encaisser']) && (!empty($num_commande) 
              || !empty($num_table))) {
                 
        // Create connection
        $instance = ConnectDb::getInstance();
        $conn = $instance->getConnection();

		
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
		
		
		// dans le cas le serveur utilise numero de commmande
		if(!empty($num_commande) ){
		
        $sql = "SELECT numero_commande FROM commande where numero_commande=".$num_commande." and payee='prete'";
        $result = $conn->query($sql);
         
        if ($result->num_rows > 0) {
		$sql = "UPDATE commande SET payee='prete' WHERE numero_commande=".$num_commande;
		$conn->query($sql);
        } else {
            echo "cette commande n'est pas encore prête";
        }
        		
		// dans le cas le serveur utilise numero de table
		else {
			
		$sql = "SELECT numero_table,numero_commande FROM commande_locale as cl,commande as c where cl.numero_commande=c.numero_commande and cl.numero_table=".$num_table." and cl.payee='prete'";
        $result = $conn->query($sql);
        $num_commande = $row["numero_table"];
        if ($result->num_rows > 0) {
		$sql = "UPDATE commande SET payee='prete' WHERE numero_commande=".$num_commande;
		$conn->query($sql);
        } else {
            echo "cette commande n'est pas encore prête";
        }
		
		}
		$conn->close();
		}
        ?>
		
        ?>
		
        <!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>
        
		<script>
		$(document).ready(function() {
			$('#choix2').hide();
			$('#radio1').click(function(){
				$('#choix2').hide();
				$("#input2").val('');
				$('#choix1').show();
			});
			$('#radio2').click(function(){
				$('#choix1').hide();
				$("#input1").val('');
				$('#choix2').show();
			});
		});
		</script>
</html>