function charger() {
    
    //rappel de la fonction du dessous toutes les 2000 ms, 2 secondes
    setTimeout(function () {

        var premierID = $('#chatG p:first').attr('id'); // on récupère l'id le plus récent

        //alert(premierID);

        $.ajax({
            url: "charger.php?id=" + premierID, // on passe l'id le plus récent au fichier de chargement
            type: "GET",
            success: function (html) {
                $('#chatG').prepend(html);
            }
        });

        charger();

    }, 1000);

}

//Appel initial de la fonction
charger();