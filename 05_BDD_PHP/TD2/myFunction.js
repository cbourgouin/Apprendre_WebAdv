/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function inscription(){
    if($("#password").val() !== $("#passwordBis").val() ){
        $("#password").css("border-color", "red");
        $("#passwordBis").css("border-color", "red");
        $("#para").append("<label id=\"errorMsg\"> Les mots de passe ne corresponde pas </label>");
    }
}

function selection(){
    $("#version").empty();
    if($("#systeme").val() === "lin"){
        $("#version").append("<option class=\"optionVe\" value=\"deb\">Debian</option>\n\
                              <option class=\"optionVe\" value=\"ubu\">Ubuntu</option>\n\
                              <option class=\"optionVe\" value=\"fed\">Fedora</option>\n\
                              <option class=\"optionVe\" value=\"sus\">SuSE</option>\n\
                              <option class=\"optionVe\" value=\"min\">Mint</option>");
    } else {
        if($("#systeme").val() === "win"){
            $("#version").append("<option class=\"optionVe\" value=\"xp\">XP</option>\n\
                                  <option class=\"optionVe\" value=\"vis\">Vist</option>\n\
                                  <option class=\"optionVe\" value=\"sev\">Seven</option>");
        } else {
            if($("#systeme").val() === "mac"){
                $("#version").append("<option class=\"optionVe\" value=\"tig\">Tiger</option>\n\
                                      <option class=\"optionVe\" value=\"leo\">Leopard</option>\n\
                                      <option class=\"optionVe\" value=\"sno\">Snow leopard</option>\n\
                                      <option class=\"optionVe\" value=\"lio\">Lion</option>");
    }
            
        }
    }
}

$(document).ready(function () {
   $("#inscription").click(inscription); 
   $(".optionSy").click(selection);
});
