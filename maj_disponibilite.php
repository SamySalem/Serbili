<!DOCTYPE HTML>
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
        <link href="fonts/fa/css/fontawesome-all.min.css" rel="stylesheet">
    </head>
    <body>
        <section>
            <div class="container">
                <div class="heading">
                    <h2>Menu</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <ul class="selecton brdr-b-primary mb-70">
                            <li><a class="active" href="#" data-select="entree"><b>Entrées</b></a></li>
                            <li><a href="#" data-select="sandwich"><b>Sandwichs</b></a></li>
                            <li><a href="#" data-select="plat"><b>Plats</b></a></li>
                            <li><a href="#" data-select="pizza"><b>Pizzas</b></a></li>
                            <li><a href="#" data-select="boisson"><b>Boissons</b></a></li>
                        </ul>
                    </div><!--col-sm-12-->
                </div><!--row-->

                <div class="row">
                    <div class="col-md-6 food-menu entree">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-1-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Cœur de laitue</b><b class="color-primary float-right">300.00 DA</b></h5>
                                <p class="pr-70">Cœur de laitue, tomate, olive noire</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu sandwich">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-2-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Shawarma</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Poulet, frite, salade</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu plat">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-3-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Cordon bleu</b><b class="color-primary float-right">400.00 DA</b></h5>
                                <p class="pr-70">Avec un accompagnement au choix</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu pizza">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-4-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Marguerite</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Sauce tomate, fromage, olive noir</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu entree">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-5-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Brik</b><b class="color-primary float-right">150.00 DA</b></h5>
                                <p class="pr-70">La viande, fromage blanc, pomme de terre, oignon, olive noire accompagner d'une salade variee</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu entree">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-6-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Salade variee</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Salade verte, tomate, carotte, œufs, poivre, pomme de terre, oignon</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu entree">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-7-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Salade mozzarella tomate</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Mozzarella, tomate, vinaigrette, huile d'olive</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu entree">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-8-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Salade de riz composee</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Riz, carotte, olive noire, thon</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu entree">
                        <div class="sided-90x mb-30">
                            <div class="s-left"><img class="br-3" src="images/menu-9-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Salade macedoine</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Pomme de terre sauter, petit pois, persil, mayonnaise,sauce speciale</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu entree">
                        <div class="sided-90x mb-30">
                            <div class="s-left"><img class="br-3" src="images/menu-10-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Omelette royale</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">La viande, fromage blanc, cheddar</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu sandwich">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-11-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Tacos</b><b class="color-primary float-right">300.00 DA</b></h5>
                                <p class="pr-70">Viande, sauce fromagere industrielle, frites</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu sandwich">
                        <div class="sided-90x mb-30">
                            <div class="s-left"><img class="br-3" src="images/menu-12-120x120.jpg"  alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Cheeseburger</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Fromage, viande de bœuf, moutarde douce, ketchup.</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu sandwich">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-13-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Shish taouk</b><b class="color-primary float-right">300.00 DA</b></h5>
                                <p class="pr-70">Accompagne d'une sauce à base de yogourt et d'ail</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu sandwich">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-14-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Makloub</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Pain maison un peu façon tortillas que l'on farci avec du thon, poulet, escalope ou meme des merguez</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu sandwich">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-15-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Kebab</b><b class="color-primary float-right">250.00 DA</b></h5>
                                <p class="pr-70">Sandwich fourre de viande grillee à la broche</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu plat">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-16-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Shawarma plat</b><b class="color-primary float-right">400.00 DA</b></h5>
                                <p class="pr-70">Poulet, frite, salade</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu plat">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-17-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Kebab plat</b><b class="color-primary float-right">400.00 DA</b></h5>
                                <p class="pr-70">Plat à base de viande grille</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu plat">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-18-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Noisette d'agneau</b><b class="color-primary float-right">400.00 DA</b></h5>
                                <p class="pr-70">Noisette d’agneau à la cardamome verte aux aromes frais proche de la bergamotte</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu plat">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-19-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Entrecote sauce normande</b><b class="color-primary float-right">400.00 DA</b></h5>
                                <p class="pr-70">Viande savoureuse accompagnee de sauces</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu plat">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-20-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Frites omelette</b><b class="color-primary float-right">200.00 DA</b></h5>
                                <p class="pr-70">Frites aux oeufs au fromage</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu pizza">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-21-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Vegetarienne</b><b class="color-primary float-right">250.00 DA</b></h5>
                                <p class="pr-70">Sauce tomate, fromage, legumes grille, champignon, olive noir</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu pizza">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-22-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Bolognaise</b><b class="color-primary float-right">300.00 DA</b></h5>
                                <p class="pr-70">Viande hache a la bolognaise, parmesan, olive noir</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu pizza">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-23-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>L'orientale</b><b class="color-primary float-right">300.00 DA</b></h5>
                                <p class="pr-70">Sauce tomate, fromages, merguez, oeuf, olive noir</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu pizza">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-24-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Pizza saumon</b><b class="color-primary float-right">350.00 DA</b></h5>
                                <p class="pr-70">Creme fraîche, fromage, saumon fume, olive noir</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu pizza">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-25-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Sicilienne</b><b class="color-primary float-right">350.00 DA</b></h5>
                                <p class="pr-70">Sauce tomate, oignons et morceaux de fromage sicilien</p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu boisson">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-26-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Cafe au lait</b><b class="color-primary float-right">60.00 DA</b></h5>
                                <p class="pr-70"></p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu boisson">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-27-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Eau minerale</b><b class="color-primary float-right">30.00 DA</b></h5>
                                <p class="pr-70"></p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu boisson">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-28-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Coca Cola</b><b class="color-primary float-right">100.00 DA</b></h5>
                                <p class="pr-70"></p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu boisson">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-29-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Fanta</b><b class="color-primary float-right">100.00 DA</b></h5>
                                <p class="pr-70"></p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu boisson">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-30-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>N'gaous (canette)</b><b class="color-primary float-right">70.00 DA</b></h5>
                                <p class="pr-70"></p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu boisson">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-31-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                            <div class="s-right">
                                <h5 class="mb-10"><b>Nespresso</b><b class="color-primary float-right">60.00 DA</b></h5>
                                <p class="pr-70"></p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu boisson">
                        <div class="sided-90x mb-30 ">
                            <div class="s-left"><img class="br-3" src="images/menu-32-120x120.jpg" alt="Menu Image"></div>
                            <div class="s-right">
                                <h5 class="mb-10"><b>Milkshake</b><b class="color-primary float-right">150.00 DA</b></h5>
                                <p class="pr-70"></p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                </div><!-- row -->
                <div class= "col-md- selected-list" >
                    <h3>Votre commande :</h3>
					<form align="center" id="formMenu">
                    <table id='liste_commande'>
                        <tr>
                            <td class="plr-10">Intitule</td>
                            <td class="plr-10">Prix unité ( DA )</td>
                            <td class="plr-10">Quantité</td>		
                            <td class="plr-10">Prix totale ( DA )</td>
                        </tr>
                    </table
                    <input type='hidden' id='nb_rows' name='nb_rows' value='0'>
					</form>
                </div>
                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a id="commander" class="btn-primaryc plr-25"><b>Commander</b></a></h6>
            </div><!-- container -->
        </section>

		<?php
		echo "Ceci";
		if (isset($_POST['nb_rows'])) {
		echo "Ceci";
		// Create connection
        $instance = ConnectDb::getInstance();
        $conn = $instance->getConnection();

		
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
		
		$sql = "INSERT INTO  Commande (400,'en_attente', 'heur', 'type')";
		$result = $conn->query($sql);
		
		for ($row = 1; $row <= $_POST['nb_rows']; $row++) {
		$sql = "INSERT INTO  Element_Commande VALUES (400,'".$_POST['row_'.$row.'_cell_1']."',".$_POST['row_'.$row.'_cell_3'].",".$_POST['row_'.$row.'_cell_4'].")";
		echo $_POST['row_'.$row.'_cell_1'];
		$conn->query($sql);
		} 
		
        }
		?>
		
        <style>
            .selected{
                background-color: #red;
            }
            .food-menu{
                margin-bottom: 25px;
                border-radius : 15px;
            }
        </style>

        <!-- SCIPTS -->     
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>

        <script>
		$("#commander").click(function() {
		var cell = 1;
		var row = 0;
		$("#liste_commande").find('td').each (function() {
		if(cell === 3){
		$( this ).find('input').attr('name','row_'+row+'_cell_'+cell);
		}
		else
		{
        var value = $( this ).html();
		if(cell === 2)
		{
		var value = parseInt(value);
		}
        $(this).append("<input type='hidden' name='row_"+row+"_cell_"+cell+"' value='"+value+"' />");
		}
        cell++;
        if(cell===5)
        {
            cell = 1;
            row++;
        }
        });    
		$('#nb_rows').val(row);
        $("#formMenu").submit(function(e) {
                e.preventDefault();
            });
        });
		
            $( ".food-menu" ).click(function() {
                $( this ).toggleClass("selected");
                var intitule;
                var prix;

                intitule = $( this ).find('h5 > b').html().replace(/\s/g, "");
                prix = $( this ).find('h5 > :nth-child(2)').html();

                //test if selected or not 
                if($(this).hasClass("selected")){
                    //if true addline	

                 					
                    $("#liste_commande").append("<tr id='"+intitule+"'><td>"
                                                +$( this ).find('h5 > b').html()+"</td><td>"
                                                +prix+"</td><td>"
                                                +"<input id='B"+intitule+"' class='qty' type='number' value='1' min='1' max='10' step='1' />"
                                                +"</td><td class='priT plr-10'> "+parseInt(prix)+" </td></tr>");

                    $("#B"+intitule).inputSpinner();
                    $("#B"+intitule).change(function(){
                        total = ($(this).val() * parseInt(prix));
                        $(this).parent().next().html(total);
                    });
                }
                else {
                    //if false remove the line
                    $("#"+intitule.replace(/\s/g, "")).remove();
                }              

            });			 
        </script>
    </body>
</html>