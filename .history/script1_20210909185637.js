"use strict";

//Kompanijoms

document.querySelector("#company_create").addEventListener("click", function() {
    //pasirinkti elementa kuri norime slepti/parodyti
    //uzteti funkcija togle, kur mums uzdeda/prideda "d-none" klase
    
    var companyForm = document.querySelector(".companyForm");
    companyForm.classList.toggle("d-none");

});

document.querySelector("#company_create").addEventListener("click", function() { 
    var pavadinimas = document.querySelector("#pavadinimas").value;
    var aprasymas = document.querySelector("#aprasymas").value;
    var tipas_id = document.querySelector("#tipas_id").value;

    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };
    //???????
    xhttp.open("GET", "addCompany.php?pavadinimas=" + vardas + "&pavarde=" + pavarde + "&teises_id=" + teises_id, true);

    xhttp.send();    
});