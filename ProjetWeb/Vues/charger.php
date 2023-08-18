<?php
    try{
        $bdd=new PDO('mysql:host=172.31.21.41;dbname=qp330205','qp330205','qp330205');
    }catch( PDOException $e){
        die('Erreur : '.$e->getMessage());
    }

    if(!empty($_GET['id'])){ // on vérifie que l'id est bien présent et pas vide

        $id = (int) $_GET['id']; // on s'assure que c'est un nombre entier
    
        // on récupère les messages ayant un id plus grand que celui donné
        $requete = $bdd->prepare('SELECT * FROM messages WHERE id > :id ORDER BY id DESC');
        $requete->bindParam(':id', $id);
        $requete->execute();
    
        $messages = null;
    
        // on inscrit tous les nouveaux messages dans une variable
        while($donnees = $requete->fetch()){
            $messages .= "<p id=\"" . $donnees['id'] . "\">" . $donnees['auteur'] . " dit : " . $donnees['texte'] . "</p>";
        }
    
        echo $messages; // enfin, on retourne les messages à notre script JS
    
    }
?>