<?php
    session_start();
?>

<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Vecteur vertical avec div</title>
    <link rel="stylesheet" type="text/css" href="../Vues/projet.css">
    <script type="text/javascript" src="../Vues/projet.js" ></script>    

</head>


<body onload="init();">

    <header>
        <?php include("configBD.php"); ?>
        <a class="logo"></a>
        <nav>
            <ul id="menu">
                    <li><a href="../Vues/projet.php">Accueil</a></li>
            </ul>
        </nav>
    </header>
    <div id="contenu">
        <div id="formStyle2">
        	<form method="post" action="../Controleurs/cInscription.php" id="formulaireInscription">
                <div class="elementForm">
            		<label for="mail">Email :</label>
                    <input type="email" id="mail" name="mail" placeholder="Cequetuveux@gmail.com"/>
                </div>    

                <div class="elementForm">
                    <label for="pseudo">Pseudo:</label>
                    <input type="text" id="pseudo" name="pseudo" />
                </div>    

                <div class="elementForm">
           			<label for="pwd1">Mot de passe :</label>
            		<input name="pwd1" id="pwd1" type="password" required/>
                </div>    

                <div class="elementForm">
            		<label for="pwd2">Mot de passe (confirmation) :</label>
            		<input name="pwd2" id="pwd2" type="password" required/>
                </div>    
				
                <div class="elementForm">
				    <input type="submit" name="submit" value="Création du compte"/>
                </div>
            </form>
            

            <form method="post" action="../Controleurs/cConnexion.php" id="formulaireConnexion">
                <div class="elementForm">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="emailco" placeholder="Cequetuveux@gmail.com"/>
                </div>

                <div class="elementForm">
                    <label for="pwd3">Mot de passe :</label>
                    <input name="pwd3" id="pwd3" type="password" required/>
                </div>
                <div class="elementForm">
                    <input type="submit" name='submitco' value="Connexion au compte"/>
                </div>    
            </form>  
        </div>

        
        <div id="centrer">
            <div id="connexion">
                <div class="coteG">
                    <h1 id="h1G">Vous avez déjà un compte ?</h1>
                </div>
                <div class="coteG">    
                    <p id="txtG"> Pour accéder à votre compte, veuillez suivre les instructions du formulaire.</p>
                </div>
                <div class="coteG">
                    <input type="button" id="con" value="inscription" onclick="AfficheInsc();">
                </div>    
            </div>
            <div id="inscription">
                <div class="coteD">
                    <h1 id="h1D">Vous n'êtes pas encore inscrit ?</h1>
                </div>
                <div class="coteD">   
                    <p id="txtD"> Rejoignez la communauté MyGo en suivant les instructions du formulaire afin de bénéficier de toutes les fonctionnalités !</p>
                </div>
                <div class="coteD">
                    <input type="button" id="ins" value="connexion" onclick="AfficheCon();">
                </div>          
            </div>
        </div>    
    </div>
    
    <div id="pied">
        <p id="Credit">Projet réalisé par le groupe 9 de DAW : Elie Cheret, Léo Mangaretto, Guillaume Leroux, Allan Rivière, Quentin Phillipe.
        </p>

        
    </div>
  

</body> 
</html> 
