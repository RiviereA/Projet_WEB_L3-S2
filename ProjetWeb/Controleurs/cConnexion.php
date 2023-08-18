<?php

    session_start();

    include_once '../Modeles/classDatabaseConnection.php';


    


    if(isset($_POST['submitco'])){
        
        if((!(empty($_POST['emailco']))) && (!(empty($_POST['pwd3'])))){
            
            $_identifiant = htmlspecialchars($_POST['emailco']);
            $_password = htmlspecialchars($_POST['pwd3']);

            $db = new DatabaseConnection();
            $db->seConnecter();

            $_crypted_password = password_hash($_password,PASSWORD_DEFAULT);
            $isInDatabase = $db->checkIDs($_identifiant,$_password);
            echo '<script type="text/javascript">alert("'.print_r($isInDatabase).'");</script>';        
            
            if($isInDatabase == 1){
                $_SESSION['pseudo'] = $db->getPseudo($_identifiant);
                echo '<script type="text/javascript">alert("'.$_SESSION['pseudo'].'");</script>';        
                $db->seDeconnecter();
                header('Location: ../Vues/NewP.php');

            }
            else
            {
                $db->seDeconnecter();
                $message='Identifiant ou mdp incorrect';
                echo '<script type="text/javascript">alert("'.$message.'");</script>';      
                header('Location: ../Vues/projet.php');
                  
            }
        }else{
            $message='Veuillez remplir tous les champs';
            echo '<script type="text/javascript">alert("'.$message.'");</script>';            
        }

    }
?>