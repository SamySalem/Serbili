<header>
    <div class="container-fluid">
        <a class="logo ml-40" href="index.php"><img src="images/logo-white.png" alt="Logo"></a>

        <div class="right-area mr-40">
            <h6>
                <a class="plr-20 mr-15 mb-20 color-white btn-fill-primary" href="#">Commandez: +213 558 74 69 73</a>
				<?php
				if(!isset($_SESSION['authenticated']))
				{
                echo"<a class='plr-20 color-white btn-fill-primary' href='07_login.php'>Commandez en ligne</a>";
				}
				else
				{				
				/* Pseudo du client 
				echo"<a>";
				echo $_SESSION['id'];
				echo"</a>";*/
				echo"<a class='' href='logout.php'>Se deconnecter</a>";
				}
				?>
            </h6>
        </div><!-- right-area -->

        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

        <ul class="main-menu font-mountainsre" id="main-menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="02_about_us.php">A propos de nous</a></li>
			<?php
			if(!isset($_SESSION['authenticated']))
			{
            echo"<li><a href='03_menu.php'>Menu</a></li>";
			}
			else
			{
			echo"<li><a href='menu_commande.php'>Menu</a></li>";
			echo"<li><a href='04_mes_commandes.php'>Mes commandes</a></li>";
			}
			?>
            <li><a href="05_contact.php">Contactez nous</a></li>
        </ul>

        <div class="clearfix"></div>
    </div><!-- container -->
</header>