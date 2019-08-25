<?php
ob_start();
session_start();
?>

<?
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
?>

<html lang = "fr">

    <head>
        <title>authentification</title>
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #ADABAB;
            }

            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
                color: #017572;
            }

            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }

            .form-signin .checkbox {
                font-weight: normal;
            }

            .form-signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }

            .form-signin .form-control:focus {
                z-index: 2;
            }

            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
                border-color:#017572;
            }

            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-color:#017572;
            }

            .XD {
                width: 100%;
                text-align: center;
            }

            h2{
                text-align: center;
                color: #017572;
            }
        </style>
    </head>

    <body>

        <h2>Veuillez entrez votre login et mots de passe :</h2> 
        <div class = "container form-signin">

            <?php

            $servername = "localhost";
            $username = "id10310525_root";
            $password = "anisanis";
            $dbname = "id10310525_restaurant";


            if (isset($_POST['log']) && !empty($_POST['login']) 
                && !empty($_POST['password'])) {



                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT login FROM user where login='".$_POST['login']."' and password='".$_POST['password']."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    echo "authentification réussite";
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $row = $result->fetch_assoc();
                    $_SESSION['username'] = $row["login"];
                    header("Location: index_.php");

                } else {
                    echo "authentification échoué";
                }
                $conn->close();
            }
            ?>
        </div>

        <div class = "container">

            <form class = "form-signin" role = "form" 
                  action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
                            ?>" method = "post">
                <h4 class = "form-signin-heading"></h4>
                <input type = "text" class = "form-control" 
                       name = "login" required autofocus ></br>
            <input type = "password" class = "form-control"
                   name = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                    name = "log">Login</button>
            </form>

        <a href = "#" title = "lol" class="XD"> coucou

            </div> 

    </body>
</html>