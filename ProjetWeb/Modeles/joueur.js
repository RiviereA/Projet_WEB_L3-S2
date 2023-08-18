class Joueur {
	constructor(id,nom,rang) {
		this.id = id;
		this.nom = nom;
		this.rang = rang;
		this.point = 0;
	}
	
	//Fonction permettant d'ajouter des points au joueur
	AjoutePoint(x) {
		this.point += x;
	}
	
	//Fonction permettant de récupérer le nombre de points du joueur
	GetPoints() {
		return this.point;
	}
	
	//Fonction permettant de récupérer le nom du joueur
	GetNom() {
		return this.nom;
	}
}
