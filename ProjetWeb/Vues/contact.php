<?php
	session_start();
?>
<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Choix partie</title>
    <link rel="stylesheet" type="text/css" href="../Vues/projet.css">
	<script type="text/javascript" src="../Vues/projet.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body onload="init();">
    <header>
    	<?php include("menus.php"); ?>
    </header>
    <div id="contenu">
    	<!-- formulaire de contact -->
    	<div id="conteneurContact">
        	<div id="Contact">
        			<h1 id="titreC">Veuillez indiquez votre problème ou votre question.</h1>
	            <form method="post" action="envoiEmail.php" id="formContact">
	            	<div id="contG">
		                <div class="EFC">
		                    <label for="NomC">Nom:</label>
		                    <input name="NomC" id="NomC" type="text" required tabindex="1" />
		                </div>

		                <div class="EFC">
		                    <label for="PrenomC">Prénom:</label>
		                    <input name="PrenomC" id="PrenomC" type="text" required tabindex="2"/>
		                </div>

		                <div class="EFC">
		                    <label for="emailC">Email:</label>
		                    <input type="email" id="emailC" name="emailC" placeholder="Cequetuveux@gmail.com" tabindex="3"/>
		                </div>
		            </div>    

		            <div id="contD">
		                <div class="EFC" id="TAC">
		                	<label for="messageC">Votre message:</label>
		                    <textarea name="messageC" id="messageC" cols="50" rows="10" tabindex="4"></textarea>
		                </div>

		                <div class="EFC">
		                	<input type="reset" name="Submit"  id="reset" value="Réinitialiser">
		                    <input type="submit"  id="envoiC" name="envoiC" value="Envoyer"/>
		                </div>
	                </div>    
	            </form>  
        	</div>
        </div>
	</div>
    <div id="pied">
    	<?php include("pied.php"); ?>
        <?php
        // Connexion à la base de données
        ?>
        
    </div>
</body> 
</html> 