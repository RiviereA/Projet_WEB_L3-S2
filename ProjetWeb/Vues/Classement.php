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
			<!-- Code HTML CLASSEMENT -->
        	<div class=ConteneurTableau">
	        	<?php
				//on verifie qu'il y a bien toutes les infos
			    	try{
						// Sous MAMP (Mac)
						$bdd = new PDO('mysql:host='.$_host.';dbname='.$_db.'', $_login, $_password);
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
					}
					catch (Exception $e)
					{
					        die('Erreur : ' . $e->getMessage());
					}

				//essayer d'afficher $_SESSION user en premier 
				//jointure entre profil et utilisateur pour avoir le pseudo et le rang
				$requete= $bdd->query( 'SELECT * FROM Profil ORDER BY Rang ASC ' );
				$nbWin= $bdd->query ('SELECT COUNT(Distinct Id_Partie) AS "parties gagnées", FROM PARTIE P, Utilisateur U, WHERE P.Gagnant=U.Id_Util'); ?> 
				<table class="table" width="80%" border="1">
				  <tr>
				    <th>Rang</th>
				    <th>Pseudo</th>
				    <th>Nombre de victoires</th>
				  </tr>
				<?php  while($donnees=$requete->fetch()) { //print_r($nuple);?>
				<tr> 
					<td><?php echo ($donnees['Rang']); ?></td>
					<td><?php echo ($donnees['Pseudo']);?></td>
					<td><?php echo ($donnees[$nbWin]);?></td>
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