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
    var pavadinimas = document.querySelector("#pavadinimas").value;
});