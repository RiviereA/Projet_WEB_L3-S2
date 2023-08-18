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


<body >
    <header>
		<?php include("../Vues/menus.php"); ?>
		<?php include("../Vues/configBD.php"); ?>
    </header>
    <div id="contenu">
        <div class="formStyle1">
            <div class="ConteneurTableau">
                <?php
                //on verifie qu\'il y a bien toutes les infos
                    try{
                        // Sous MAMP (Mac)
                        $bdd = new PDO('mysql:host='.$_host.';dbname='.$_db.'', $_login, $_password);
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                    }
                    catch (Exception $e)
                    {
                            die('Erreur : ' . $e->getMessage());
                    }

                $requete= $bdd->query( 'SELECT * FROM Partie ORDER BY Id_Partie ASC ' ); ?>
                <table class="table" width="80%" border="1">
                <tr>
                    <th>Date</th>
                    <th>ID</th>
                    <th>Taille</th>
                    <th>Type</th>
                    <th>Rejoindre la partie</th>
                </tr>
                <?php  while($donnees=$requete->fetch()) {      //print_r($nuple);?>
                <tr> 
                    <td><?php echo($donnees['Debut']); ?></td>
                    <td><?php echo ($donnees['Id_partie']);?></td>
                    <td><?php echo($donnees['Taille']); ?></td>
                    <td><?php echo ($donnees['Access']);?></td>
                    <td><input type="button" id="join" name="rejoindre" value="Rejoindre"/></td>
                    <?php
                    //affichage de la page Jeu avec les données de la partie correspondante
                    ?>
                </tr>

                <?php } ?>
                </table>
            </div>
        </div>	
			
    </div>
    <div id="pied">
    	<?php include("../Vues/pied.php"); ?>
        <?php
        // Connexion à la base de données
        ?>
        
    </div>
  

</body> 
</html> 






        