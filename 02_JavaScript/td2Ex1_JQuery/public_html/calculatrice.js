/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function multiplication(){
    var valeur1 = $("#var1").val();
    var valeur2 = $("#var2").val();
    $("#resultat1").val(valeur1 * valeur2);
    
}

function addition(){
    var valeur1 = $("#var3").val();
    var valeur2 = $("#var4").val();
    $("#resultat2").val(parseFloat(valeur1) + parseFloat(valeur2));
    
}

$("document").ready(function () {
    $("#egale1").click(multiplication);
    $("#egale2").click(addition);
});


