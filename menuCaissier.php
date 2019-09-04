<!DOCTYPE HTML>
<?php include 'ConnectDB.php'; ?>
<html>
    <head>
        <title>Menu Caissier</title>
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

                            $sql = "SELECT numero_commande FROM Commande where numero_commande=".$num_commande." and Etat='prete'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $sql = "UPDATE Commande SET Etat='payee' WHERE numero_commande=".$num_commande;
                                $conn->query($sql);
                                echo "Opération faite";
                            } else {
                                echo "cette commande n'est pas encore prête";
                            }
                        }

                        // dans le cas le serveur utilise numero de table
                        else {

                            $sql = "SELECT numero_table,numero_commande FROM Commande_Locale as cl,Commande as c where cl.Commande_numero_commande=c.numero_commande and cl.numero_table=".$num_table." and c.Etat='prete'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {

                                while($row = $result->fetch_assoc()){
                                    $num_commande = $row["numero_commande"];  
                                }

                                $sql = "UPDATE Commande SET Etat='payee' WHERE numero_commande=".$num_commande;
                                $conn->query($sql);
                                echo "Opération faite";
                            } else {
                                echo "cette commande n'est pas encore prête";
                            }

                        }
                        $conn->close();
                    }
                    ?>
                    
                    <button class="btn btn-info btn-md btn-block text-uppercase mt-3 mb-1" type="submit" name="Encaisser">Encaisser</button>
                    <input type="hidden" name="hidden" value="CalculerRecette">
                </form>
            </div>
        </div>
    </body>



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