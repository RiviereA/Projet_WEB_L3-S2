var partie = new Partie(1,2);

//Action de clique sur le goban
function Click_Surface(event) {
	var x = event.clientX;
	var y = event.clientY;
	//console.log('X = ' + x);
	//console.log('Y = ' + y);
	partie.JouerCoup(x,y);
}

//Action de deplacement de la souris sur le goban
function Mouse_Surface(event) {
	var x = event.clientX;
	var y = event.clientY;
	partie.AfficherCoup(x,y);
}

//Utilisation du bouton "Passer son tour"
function PasseTour() {
	partie.PasseTour();
}

function Abandonner() {
	partie.PasseTour();
	partie.PasseTour();
}

function AdaptPosition() {
	partie.AdaptPosition();
}

window.onresize = AdaptPosition;
