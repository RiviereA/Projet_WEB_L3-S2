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
			<?php include("../Vues/menus.php"); ?>
			<?php include("../Vues/configBD.php"); ?>
    </header>

    <div id="contenu">
    	<!-- Code HTML HISTORIQUE -->
    	<div class="ConteneurTableau">
	        <?php
						//on verifie qu'il y a bien toutes les infos
						try{
							$bdd = new PDO('mysql:host='.$_host.';dbname='.$_db.'', $_login, $_password);
							array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
						}
						catch (Exception $e)
						{
							die('Erreur : ' . $e->getMessage());
						}

						$requete= $bdd->query( 'SELECT * FROM Partie WHERE Gagnant=1104'); 
						//avec la session, comparer le pseudo avec les données de la BD pour récuperer les parties de la personne connectée?>
						
						<table class="table" width="80%" border="1">
							<tr>
								<th>Date</th>
								<th>Taille</th>
								<th>Résultat</th>
							</tr>
						<?php  while($donnees=$requete->fetch()) {      //print_r($nuple);?>
						<tr> 
							<td><?php echo($donnees['Fin']); ?></td>
							<td><?php echo ($donnees['Taille']);?></td>
							<td><?php echo ($donnees['Gagnant']);?></td>
						</tr>
						<?php } ?>
					</table>
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
