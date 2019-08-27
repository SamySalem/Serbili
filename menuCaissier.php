<html>
    <head>
        <title>Menu Caissier</title>
    </head>
    <body>
        
                      <div class="main container mt-3">
                        <div class="content bg-light rounded">
                        <form align="center" id="form">
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
                            <input id="input1" name="num_commande" type="number">
                        </div>
                        <button class="btn btn-info btn-md btn-block text-uppercase mt-3 mb-1" type="submit" id="sub"><i class="fas fa-calendar-check"></i> Encaisser</button>
                        <div id="resultat" class="mb-3"></div>
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
            $('#choix1').show();
        });
        $('#radio2').click(function(){
            $('#choix1').hide();
            $('#choix2').show();
        });
    });
</script>
</html>