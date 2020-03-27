function ajouterNombre(){
    $("#resultat").text($("#resultat").text() + $(this).val());
}

function multiplication(){
    var val1 = parseFloat($("#resultat").text);
    $("#resultat").text("");
    $("#egale").click( function(){
        var val2 = parseFloat($("#resultat").text);
        $("#resultat").text("");
        $("#resultat").text(val1 * val2);
    });
}

$(document).ready( function(){
    $(".btnNb").click(ajouterNombre);
    
    $("#fois").click(multiplication);
});
