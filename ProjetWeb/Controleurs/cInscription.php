<?php
    include_once '../Vues/projet.php';
    include_once '../Modeles/classDatabaseConnection.php';
    
    echo '<script type="text/javascript">alert("test");</script>';         
    if(isset($_POST['submit'])){
    echo '<script type="text/javascript">alert("ok");</script>';         

        if((!(empty($_POST['pseudo']))) && 
        (!(empty($_POST['pwd1']))) && 
        (!(empty($_POST['pwd2']))) &&
        (!(empty($_POST['mail'])))){
            if($_POST['pwd1'] != $_POST['pwd2']){
                echo "Veuillez taper le même mot de passe svp<br>";
            }else{
                echo '<script type="text/javascript">alert("ok2");</script>';         

                $_identifiant = $_POST['pseudo'];
                $_mail = $_POST['mail'];
                $_crypted_password = password_hash($_POST['pwd1'],PASSWORD_DEFAULT);
                $db = new DatabaseConnection();
                $db->seConnecter();
                $db->addNewUser($_identifiant, $_mail, $_crypted_password);
                echo '<script type="text/javascript">alert("Votre inscription s\'est déroulée avec succès");</script>';         
                $db->seDeconnecter();

            }

        }else{
            $message='Veuillez remplir tous les champs svp';
            echo '<script type="text/javascript">alert("'.$message.'");</script>';         
        }
    }
    