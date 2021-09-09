"use strict";

//Kompanijoms

function showCompanies() {
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "actionCompanies.php", true);
    xhttp.send();
}


document.querySelector("#company_create").addEventListener("click", function() {
    //pasirinkti elementa kuri norime slepti/parodyti
    //uzteti funkcija togle, kur mums uzdeda/prideda "d-none" klase
    
    var companyForm = document.querySelector(".companyForm");
    companyForm.classList.toggle("d-none");

});

document.querySelector("#createCompany").addEventListener("click", function() { 
    var pavadinimas = document.querySelector("#pavadinimas").value;
    var aprasymas = document.querySelector("#aprasymas").value;
    var tipas_id = document.querySelector("#tipas_id").value;

    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };
    
    xhttp.open("GET", "addCompany.php?pavadinimas=" + pavadinimas + "&aprasymas=" + aprasymas + "&tipas_id=" + tipas_id, true);
    xhttp.send();
    
    showCompanies();
});


// querySelector pasiims tik pati pirma is visu delete Mygtuku

var mygtukai = document.querySelectorAll('.deleteCompany'); //mygtuku(objektas) masyva

//addEventListener
for(mygtukai of mygtukas) {
    mygtukas.addEventListener("click", function() {
        console.log(this.getAttribute("data-company-id"));
        this.getAttribute("data-company-id")

    });
}




// document.querySelector(".deleteButton").addEventListener("click", function() {

// });