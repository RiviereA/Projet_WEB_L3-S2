class Partie {
	constructor(idJ1,idJ2) {
		this.j1 = new Joueur(1,"Jean",253);
		this.j2 = new Joueur(2,"Pierre",156);
		this.j2.AjoutePoint(6.5);
		this.jActif = this.j1;
		this.plateau = new Plateau();
		this.termine = 0;
	}
	
	//Fonction permettant au joueur actif de jouer un coup
	JouerCoup(X,Y) {
		if (this.termine < 2) {
			this.termine = 0;
			if (this.jActif === this.j1) {
				if(this.plateau.PlacePion(X,Y,1)) this.jActif = this.j2;
				this.j1.AjoutePoint(this.plateau.Capture(X,Y,1));
			} else {
				if(this.plateau.PlacePion(X,Y,2)) this.jActif = this.j1;
				this.j2.AjoutePoint(this.plateau.Capture(X,Y,2));
			}
		}
	}
	
	//Fonction permettant d'afficher le prochain coup sur le goban
	AfficherCoup(X,Y) {
		if (this.jActif === this.j1) {
			this.plateau.AffOmbre(X,Y,1);
		} else {
			this.plateau.AffOmbre(X,Y,2);
		}
	}
	
	//Fonction permettant à un joueur de passer son tour
	PasseTour() {
		this.termine++;
		if (this.termine >= 2) {
			var res = "Fin de la partie\nScore Joueur 1 : "+this.j1.GetPoints()+"\nScore Joueur 2 : "+this.j2.GetPoints();
			if (this.j1.GetPoints() < this.j2.GetPoints()) {
				res += "\n\nVictoire de "+this.j2.GetNom();
			} else {
				res += "\n\nVictoire de "+this.j1.GetNom();
			}
			alert(res);
		} else {
			if (this.jActif === this.j1) {
				this.jActif = this.j2;
			} else {
				this.jActif = this.j1;
			}
		}
	}
	
	AdaptPosition() {
		this.plateau.AdaptPosition();
	}
}

