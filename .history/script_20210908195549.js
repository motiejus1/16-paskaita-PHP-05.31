"use strict";


//tas mygtukas paspaudimo metu isvestu informacija 
//i console log


document.querySelector("#show").addEventListener("click", function() {
    console.log("Mygtukas paspaustas");

    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "action.php", true);
    xhttp.send();

});

document.querySelector("#create").addEventListener("click", function() {

var clientForm = document.querySelector("#clientForm");
clientForm.


});

console.log("Script failas veikia");