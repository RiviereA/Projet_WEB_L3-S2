$(document).ready(function () {
    $('#envoiG').click(function (e) {
        e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
        
        var message = encodeURIComponent($('#messageG').val());
        alert("ok");
        if (message != "") { // on vérifie que le message n'est pas vide
            //Appel du fichier pour insérer dans la base de données
            $.ajax({
                type: "POST",
                url: "traitementchat.php", // on donne l'URL du fichier de traitement
                data: "message=" + message
            });
            alert("ok2");
            //Affichage des messages sur la page
            $('#chatG').append("<p>" + pseudo + " dit : " + message + "</p>"); // on ajoute le message dans la zone prévue
            alert("ok3");
        }
    });
});


