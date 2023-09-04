function validate() {
    var isValid = true;

    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();
    var sujet = $("#sujet").val();
    var message = $("#message").val();

    if (nom == "") {
        $("#nom").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (prenom == "") {
        $("#prenom").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (email == "") {
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#info").html("(Adresse email non valide)");
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (sujet == "") {
        $("#sujet").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (message == "") {
        $("#message").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    return isValid;
}