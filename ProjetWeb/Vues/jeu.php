<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Goban</title>
    <script type='text/javascript' src='../Modeles/partie.js'></script>
	<script type='text/javascript' src='../Modeles/joueur.js'></script>
	<script type='text/javascript' src='../Modeles/plateau.js'></script>
	<link rel="stylesheet" type="text/css" href="../Vues/projet.css">
</head>
<body>
    <header>
        <?php include("menus.php"); ?>
    </header>
    <div id="contenu">
        <div id="jeu">
            <div class="Surface" onmousemove="Mouse_Surface(event)" onclick="Click_Surface(event)"></div>
            <div>
                <object id="goban-svg" width="500" height="500" type="image/svg+xml" data="../Modeles/goban19.svg"></object>
            </div>
        </div>	
        <div id="toolsIG">
            <div id="chatbox">
                <div id="chatIG">
                    <!-- les messages du tchat --> 
                </div>
                    <form name="message" action="traitement.php" id="formMsgIG">
                        <input name="usermsg" type="text" id="userMsg"/>
                        <input name="submitmsg" type="submit"  id="submitMsg" value="Envoyer"/>
                    </form>  
            </div>

            <div id="infoIG">  
<div id="boutonsIG">
                    <input name="theme" type="button"  id="theme" value="Thème"/>
                    <input name="passer" type="button"  id="passer" onclick="PasseTour();" value="Passer"/>
                    <input name="abandon" type="submit"  id="abandon" onclick="Abandonner();" value="Abandonner" />
                </div>
                
                <div id="timer">
                </div>
            </div>                    
        </div> 
    </div>       
    <div id="pied">
        <?php include("pied.php"); ?>
        <div id="chatSpec">
            <!-- les messages du tchat -->
        </div>
        <form method="POST" action="traitement2.php" id="messG">
            <textarea name="messageG" id="messageG"></textarea><br />
            <input type="submit" name="submit" value="Envoyez" id="envoiG"/>
        </form>
    </div>
</body>
<script type='text/javascript' src='../Controleurs/goban_Controleur.js'></script>
</html>
