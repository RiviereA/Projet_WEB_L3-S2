class Plateau {
	constructor() {
		var svg = document.getElementById("goban-svg"); 
		var posSvg = svg.getBoundingClientRect();
		
		var data = svg.data;
		data = data.split("/");
		data = data[data.length - 1];
		data = data.substr(5);
		this.taille = data.split(".")[0];
		
		//tabPosition = tableau des coordonnees des cases du plateau
		this.tabPosition = new Array();
		for(var i= 0; i < this.taille; i++)
		{
			this.tabPosition.push(new Array());
			for(var j= 0; j < this.taille; j++)
			{
				var X = (((svg.offsetHeight - (svg.offsetHeight/5))/20)*j) + (svg.offsetHeight/10) + posSvg.top;
				var Y = (((svg.offsetWidth - (svg.offsetWidth/5))/20)*i) + (svg.offsetWidth/10) + posSvg.left;
				this.tabPosition[i].push([X,Y]);
			}
		}
		//console.log(this.tabPosition);
		this.ecart = (((svg.offsetHeight - (svg.offsetHeight/5))/20)*0.5);
		//console.log(this.ecart);
		
		//tabPion = tableau des positions des pions
		this.tabPion = new Array();
		for(var i= 0; i < this.taille; i++)
		{
			this.tabPion.push(new Array());
			for(var j= 0; j < this.taille; j++)
			{
				this.tabPion[i].push(0);
			}
		}
		
		//tabLiberte = tableau permettant de savoir si des pions sont capturés
		this.tabLiberte = new Array();
		for(var i= 0; i < this.taille; i++)
		{
			this.tabLiberte.push(new Array());
			for(var j= 0; j < this.taille; j++)
			{
				this.tabLiberte[i].push(0);
			}
		}
	}
	
	//Fonction placant un pion sur le goban
	PlacePion(X,Y,J) {
		var svg = document.getElementById("goban-svg"); 
		var svgDoc = svg.contentDocument;
		var pions = svgDoc.getElementById("placePions");
		var pion = document.createElementNS("http://www.w3.org/2000/svg","use");
		var posTrouve = false;
		
		for(var i= 0; i < this.taille; i++)
		{
			if ((X <= (this.tabPosition[i][0][1] + this.ecart)) && (X >= (this.tabPosition[i][0][1] - this.ecart))) {
				for(var j= 0; j < this.taille; j++)
				{
					if ((Y <= (this.tabPosition[i][j][0] + this.ecart)) && (Y >= (this.tabPosition[i][j][0] - this.ecart))) {
						if (this.tabPion[i][j] == 0) {
							if (this.PositionValide(i,j,J)) {
								pion.setAttribute("id", "Pion"+i+"-"+j);
								pion.setAttribute("transform", "translate("+ ((i*10)-30) +","+ ((j*10)-30) +")");
								posTrouve = true;
								this.tabPion[i][j] = J;
							}
						} else {
							alert("Position déjà occupé par un pion");
						}
					}
				}
			}
		}
		if (posTrouve === true) {
			
			if (J === 1) {
				pion.setAttributeNS("http://www.w3.org/1999/xlink", "href", "#PNoir");
			} else {
				pion.setAttributeNS("http://www.w3.org/1999/xlink", "href", "#PBlanc");
			}
			pions.appendChild(pion);
			return true;
		}
		return false;
	}
	
	//Fonction affichant un pion transparent sur le goban
	AffOmbre(X,Y,J) {
		var svg = document.getElementById("goban-svg"); 
		var svgDoc = svg.contentDocument;
		var pions = svgDoc.getElementById("placePions");
		var pion = document.createElementNS("http://www.w3.org/2000/svg","use");
		var posTrouve = false;
		
		for(var i= 0; i < this.taille; i++)
		{
			if ((X <= (this.tabPosition[i][0][1] + this.ecart)) && (X >= (this.tabPosition[i][0][1] - this.ecart))) {
				for(var j= 0; j < this.taille; j++)
				{
					if ((Y <= (this.tabPosition[i][j][0] + this.ecart)) && (Y >= (this.tabPosition[i][j][0] - this.ecart))) {
						if (this.tabPion[i][j] == 0) {
							pion.setAttribute("transform", "translate("+ ((i*10)-30) +","+ ((j*10)-30) +")");
							posTrouve = true;
						} else {
							
						}
					}
				}
			}
		}
		if (posTrouve === true) {
			
			var ombre;
			if (ombre = svgDoc.getElementById("Ombre")) {
				ombre.parentNode.removeChild(ombre);
			}
			
			pion.setAttribute("id", "Ombre");
			if (J === 1) {
				pion.setAttributeNS("http://www.w3.org/1999/xlink", "href", "#ONoir");
			} else {
				pion.setAttributeNS("http://www.w3.org/1999/xlink", "href", "#OBlanc");
			}
			pions.appendChild(pion);
		}
	}
	
	//Fonction lançant la capture des pions adverses
	Capture(X,Y,J) {
		var x = 0;
		var y = 0;
		for(var i= 0; i < this.taille; i++)
		{
			if ((X <= (this.tabPosition[i][0][1] + 15)) && (X >= (this.tabPosition[i][0][1] - 15))) {
				for(var j= 0; j < this.taille; j++)
				{
					if ((Y <= (this.tabPosition[i][j][0] + 15)) && (Y >= (this.tabPosition[i][j][0] - 15))) {
						x = i;
						y = j;
					}
				}
			}
		}
		
		for(var k= 0; k < this.taille; k++)
		{
			for(var l= 0; l < this.taille; l++)
			{
				this.tabLiberte[k][l] = 0;
			}
		}
		
		var capture = false;
		if ( (x-1 > 0) && (this.tabPion[x-1][y] != 0) && (this.tabPion[x-1][y] != J) ) {
			if (this.DegreLiberte(x-1,y,J) == false) capture = true;
		}
		if ( (x+1 < this.taille) && (this.tabPion[x+1][y] != 0) && (this.tabPion[x+1][y] != J) ) {
			if (this.DegreLiberte(x+1,y,J) == false) capture = true;
		}
		if ( (y-1 > 0) && (this.tabPion[x][y-1] != 0) && (this.tabPion[x][y-1] != J) ) {
			if (this.DegreLiberte(x,y-1,J) == false) capture = true;
		}
		if ( (y+1 < this.taille) && (this.tabPion[x][y+1] != 0) && (this.tabPion[x][y+1] != J) ) {
			if (this.DegreLiberte(x,y+1,J) == false) capture = true;
		}
		
		if (capture) {
			return this.Emprisonnement();
		} else {
			return 0;
		}
	}
	
	//Fonction permettant de savoir si un pion ou un groupe de pions possède au moins 1 degres de liberte
	DegreLiberte(X,Y,J) {
		
		var dLib = 0;
		
		if ( (X-1 > 0) && (this.tabPion[X-1][Y] == 0) ) {
			dLib++;
		}
		if ( (X+1 < this.taille) && (this.tabPion[X+1][Y] == 0) ) {
			dLib++;
		}
		if ( (Y-1 > 0) && (this.tabPion[X][Y-1] == 0) ) {
			dLib++;
		}
		if ( (Y+1 < this.taille) && (this.tabPion[X][Y+1] == 0) ) {
			dLib++;
		}
		
		if (dLib > 0) {
			return true;
		} else {
			this.tabLiberte[X][Y] = 1;
			
			if ( (X-1 > 0) && (this.tabPion[X-1][Y] != 0) && (this.tabPion[X-1][Y] != J) && (this.tabLiberte[X-1][Y] == 0) ) {
				if (this.DegreLiberte(X-1,Y,J)) return true;
			}
			if ( (X+1 < this.taille) && (this.tabPion[X+1][Y] != 0) && (this.tabPion[X+1][Y] != J) && (this.tabLiberte[X+1][Y] == 0) ) {
				if (this.DegreLiberte(X+1,Y,J)) return true;
			}
			if ( (Y-1 > 0) && (this.tabPion[X][Y-1] != 0) && (this.tabPion[X][Y-1] != J) && (this.tabLiberte[X][Y-1] == 0) ) {
				if (this.DegreLiberte(X,Y-1,J)) return true;
			}
			if ( (Y+1 < this.taille) && (this.tabPion[X][Y+1] != 0) && (this.tabPion[X][Y+1] != J) && (this.tabLiberte[X][Y+1] == 0) ) {
				if (this.DegreLiberte(X,Y+1,J)) return true;
			}
			this.tabLiberte[X][Y] = 2;
			return false;
		}
	}
	
	//Fonction permettant de capturer les pionts qui n'ont pas de degre de liberte
	Emprisonnement() {
		var svg = document.getElementById("goban-svg"); 
		var svgDoc = svg.contentDocument;
		
		var nbPrisonniers = 0;
		for(var i= 0; i < this.taille; i++)
		{
			for(var j= 0; j < this.taille; j++)
			{
				if (this.tabLiberte[i][j] == 2) {
					var pion;
					if (pion = svgDoc.getElementById("Pion"+i+"-"+j)) {
						pion.parentNode.removeChild(pion);
					}
					this.tabPion[i][j] = 0;
					nbPrisonniers++;
				}
			}
		}
		return nbPrisonniers;
	}
	
	//Fonction permettant de savoir si la position où le joueur souhaite placer son coup est valide
	PositionValide(X,Y,J) {
		this.tabPion[X][Y] = J;
		var j;
		if (J == 1) {
			j = 2;
		} else {
			j = 1;
		}
		if (this.DegreLiberte(X,Y,j) == true) {
			this.tabPion[X][Y] = 0;
			return true;
		} else {
			this.tabPion[X][Y] = 0;
			alert("Cette position n'est pas valide !");
			return false;
		}
	}
	
	AdaptPosition() {
		var svg = document.getElementById("goban-svg"); 
		var posSvg = svg.getBoundingClientRect();
		
		this.tabPosition = new Array();
		for(var i= 0; i < this.taille; i++)
		{
			this.tabPosition.push(new Array());
			for(var j= 0; j < this.taille; j++)
			{
				var X = (((svg.offsetHeight - (svg.offsetHeight/5))/20)*j) + (svg.offsetHeight/10) + posSvg.top;
				var Y = (((svg.offsetWidth - (svg.offsetWidth/5))/20)*i) + (svg.offsetWidth/10) + posSvg.left;
				this.tabPosition[i].push([X,Y]);
			}
		}
		//console.log(this.tabPosition);
		this.ecart = (((svg.offsetHeight - (svg.offsetHeight/5))/20)*0.5);
		//console.log(this.ecart);
	}
}
