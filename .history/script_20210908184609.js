"use strict";


//tas mygtukas paspaudimo metu isvestu informacija 
//i console log


document.querySelector("#show").addEventListener("click", function() {
    console.log("Mygtukas paspaustas");

    var xhttp = new XMLHttpRequest(); //objektas
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4) && this.status == 200) {

        }
    };

    
});


console.log("Script failas veikia");