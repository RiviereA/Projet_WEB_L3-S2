<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<script type='text/javascript' src='../Modeles/partie.js'></script>
	<script type='text/javascript' src='../Modeles/joueur.js'></script>
	<script type='text/javascript' src='../Modeles/plateau.js'></script>
	<title>Goban</title>
	 <link rel="stylesheet" type="text/css" href="goban.css">
	</head>
	<button onclick="PasseTour()">Passer son tour</button>
	<body>
		<div class="Surface" onmousemove="Mouse_Surface(event)" onclick="Click_Surface(event)"></div>
		<div>
			<object id="goban-svg" width="1000" height="1000" type="image/svg+xml" data="../Modeles/goban.svg">
		</div>
	</body>
	<script type='text/javascript' src='../Controleurs/goban_Controleur.js'></script>
</html>
