<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Choix partie</title>
    <link rel="stylesheet" type="text/css" href="../Vues/projet.css">
	<script type="text/javascript" src="../Vues/projet.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body >
    <header>
		<?php include("../Vues/menus.php"); ?>
		<?php include("../Vues/configBD.php"); ?>
    </header>
    <div id="contenu">
    	<!-- Contenue nouvelle= 2 formulaires -->
		<!-- formulaire de creation de partie -->

		<form method="post" action="traitement.php" id="formCreate">
			<div class="elementCreate">
				<fieldset>
				<legend>Créer une partie</legend>
					<div class="gauche">
						<p>Choisir le type de partie :<br/>
							<input type="radio" name="type" value="privée" id="private"/> 
							<label for="private">Privée</label><br/>
							<input type="radio" name="type" value="publique" id="public"/> 
							<label for="public">Public</label><br/>
							<input type="radio" name="type" value="confidentielle" id="Conf"/> 
							<label for="Conf">Confidentielle</label><br /><br/>
						</p> 
					</div>	
				
					<div class="droite">
						<p>Choisir la grille :<br/>
							<input type="radio" name="typeG" value="9" id="neuf"/> 
							<label for="neuf">9x9</label><br/>
							<input type="radio" name="typeG" value="13" id="treize"/> 
							<label for="treize">13x13</label><br/>
							<input type="radio" name="typeG" value="19" id="dixneuf"/> 
							<label for="dixneuf">19x19</label><br />
						</p>
					</div>
				
					<div class="bas">
						<label for="IDG">ID de la partie :</label>
						<input type="text" id="IDG" name="IDG">	
					</div>

				</fieldset>
			</div>	

			<div class="elementCreate2">
				<input type="button" value="Créer" onclick=""/>
			</div>
		</form> 

		<div class="formStyle1">
		<form method="post" action="traitement.php" id="formJoin">
			<div class="elementCreate">
				<fieldset>
				<legend>Rejoindre une partie</legend>
					<div class="gauche">
						<p>Choisir le type de partie :<br/>
							<input type="radio" name="typeJ" value="privéeJ" id="privateJ"/> 
							<label for="privateJ">Privée</label><br/>
							<input type="radio" name="typeJ" value="publiqueJ" id="publicJ"/> 
							<label for="publicJ">Public</label><br/>
							<input type="radio" name="typeJ" value="confidentielleJ" id="ConfJ"/> 
							<label for="ConfJ">Confidentielle</label><br /><br/>
						</p> 
					</div>	

					<div class="droite">
						<p>Choisir la grille :<br/>
							<input type="radio" name="typeGJ" value="9J" id="neufJ"/> 
							<label for="neufJ">9x9</label><br/>
							<input type="radio" name="typeGJ" value="13J" id="treizeJ"/> 
							<label for="treizeJ">13x13</label><br/>
							<input type="radio" name="typeGJ" value="19J" id="dixneufJ"/> 
							<label for="dixneufJ">19x19</label><br /><br/>
						</p>
					</div>	

					<div class="bas">
						<hr width="50%" color="grey" align=center>
						<label for="IDGJ">Rejoindre une partie avec un ID :</label>
						<input type="text" id="IDGJ" name="IDGJ">	
					</div>	

				</fieldset>
			</div>
			<div class="elementCreate2">
				<input type="button" value="Rejoindre" onclick=""/>
			</div>	
		</form>

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
