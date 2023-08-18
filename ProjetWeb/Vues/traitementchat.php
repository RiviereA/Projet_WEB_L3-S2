<?php
    session_start();

    try{
        $bdd = new PDO('mysql:host=172.31.21.41;dbname=qp330205', 'qp330205', 'qp330205');
    }catch( PDOException $e){
        die('Erreur : '.$e->getMessage());
    }

    if(!empty($_POST['message'])){

        $pseudo = htmlspecialchars($_SESSION['pseudo']);
        $message = htmlspecialchars($_POST['message']);

        $insertion = $bdd->prepare('INSERT INTO messages VALUES (NULL, :auteur, :texte)');

        $insertion->bindParam(':auteur', $pseudo);
        $insertion->bindParam(':texte', $message);

        $insertion->execute();
    }
?>