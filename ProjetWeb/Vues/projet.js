var passTurnPlayer1=0;
var passTurnPlayer2=0;
var passTurn=0;



function init(){
	var FormCon = document.querySelector('#formulaireConnexion');
    FormCon.style.visibility='hidden';
    FormCon.style.display='none';   
}

function AfficheInsc(){
    var form = document.querySelector('#formStyle2');
    var formulaire = document.querySelector('#formulaire');
    form.style.transform = "translateX(0px)";
    var FormCon = document.querySelector('#formulaireConnexion');
    FormCon.style.visibility='hidden';
    FormCon.style.display='none'; 
    var FormInsc = document.querySelector('#formulaireInscription');
    FormInsc.style.visibility='visible';
    FormInsc.style.display='block';
}

function AfficheCon(){
	var form = document.querySelector('#formStyle2');
    form.style.transform = "translateX(100%)";
    var FormInsc = document.querySelector('#formulaireInscription');
    FormInsc.style.visibility='hidden';
    FormInsc.style.display='none';
    var FormCon = document.querySelector('#formulaireConnexion');
    FormCon.style.visibility='visible';
    FormCon.style.display='block'; 
}


function pass(actualPlayer)
{
  if (passTurn==0)
  {
    document.getElementById('chatIG').innerHTML='joueur '+actualPlayer+" passe";
    passTurn=actualPlayer;
    if (actualPlayer==1)
    {
      score1--;
      if(iaActive==false)
      {
        player=2;
      }
      
    }
    else if (actualPlayer==2)
    {
      score2--;
      if(iaActive==false)
      {
        player=1;
      }
      
    }
  }
  else if(endGame==true)
    {
      changeGoban(d);
    }
    else if(endGame==false)
    {
      
      afficheTerritory();
      endGame=true;
      
    }
  
  console.log(endGame);
  turn++;
}








function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifPseudo(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifForm(f)
{
   var pseudoOk = verifPseudo(f.pseudo);
   var mailOk = verifMail(f.email);
   var ageOk = verifAge(f.age);
   
   if(pseudoOk && mailOk && ageOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}