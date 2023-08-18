<?php
	session_start();
?>

<a class="logo"></a>
        <nav>
            <ul id="menu">                      
                    <li><a href="../Vues/regles.php">Règles</a></li>
                    <li><a href="../Vues/contact.php">Contact</a></li>
                    <li><a>Partie</a>
                        <ul id="sousmenuC">
                            <li class="enfant"><a href="../Vues/NewP.php">Nouvelle partie</a></li>
                            <li class="enfant"><a href="../Vues/ListeP.php">Liste</a></li>
                        </ul>
                    </li>    
                    <li><a>Mon compte</a>
                        <ul id="sousmenuL">
                            <li class="enfant"><a href="../Vues/Classement.php">Classement</a></li>
                            <li class="enfant"><a href="../Vues/Compte.php">Historique</a></li>
                            <li class="enfant"><a href="../Vues/projet.php">Déconnexion</a></li>
                        </ul>
                    </li>
            </ul>
        </nav>';
     