<!DOCTYPE HTML>
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
    </head>
    <body>

        <!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>
        
        
        <?php include 'header-employe.php'; ?>
        
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
                    <tr class="commande">
                        <th>1</th>
                        <td>01/01/2019</td>
                        <td>13:15</td>
                        <td>Locale</td>
                        <td>1</td>
                    </tr>
                    <tr class="commande">
                        <th>2</th>
                        <td>01/01/2019</td>
                        <td>13:16</td>
                        <td>Emporte</td>
                        <td>Null</td>
                    </tr>        
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