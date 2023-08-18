<?php
	session_start();
?>
<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
 
 
  // Récupération des variables et sécurisation des données
    $recupNom = htmlentities(trim($_POST['NomC']));
    $recupPrenom = htmlentities(trim($_POST['PrenomC']));
    if ( preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['emailC'] ) ){
      $recupEmail = htmlentities(trim($_POST['emailC']));
    }  
    else{
      echo("adresse mail invalide");
    }
    $recupMess = htmlentities(trim($_POST['messageC']));
 

  // Variables concernant l'email
 
  $destinataire = 'leo.mangaretto@gmail.com'; 
  $sujet = 'Mail de contact';
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$recupNom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$recupEmail.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$recupMess.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 
  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
  echo '<h2>Message envoyé!</h2>'; 
}
?>