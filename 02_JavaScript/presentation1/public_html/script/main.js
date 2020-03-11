/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var a = 5;
let b = 6;
objet = {};
tableau = [];

tableau[0] = 15;
tableau[1] = 23;

objet.nom = "Bourgouin"
objet.age = 18

club = [{prenom:"Charly", age:18},
        {prenom:"Lilian", age:14}]

if( a == 5 ){
    console.log("a vaut 5");
}else{
    console.log("a ne vaut pas 5");
}
/**
 * @function anonime
 * @param {type} x
 * @param {type} y
 * @returns {unresolved}
 */
function som(x, y){
    return x+y;
}

let d = som(b,a);
console.log(d);

z = function(x, y){
    return x-y;
}

let diff = z(a, b);

LeLogin = document.forms["monForm"].login.value;

function afficheLogin (){
    document.forms["monForm"].loginBis.values = document.forms["monForm"].login.value;
}