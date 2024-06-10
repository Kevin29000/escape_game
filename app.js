let reponse_enigme_thermopyles="Thermopyles";

function checkFormEnigmeThermopyles() {
    event.preventDefault();
    resultatEnigmeThermopyles();
}

function resultatEnigmeThermopyles(){
    if (reponse_enigme_thermopyles==document.getElementById("test_reponse").value)
        {
            document.getElementById("correct-popup").classList.toggle("active"); 
        }
    else 
    if (reponse_enigme_thermopyles!=document.getElementById("test_reponse").value)
        {
            document.getElementById("incorrect-popup").classList.toggle("active");
        }
}


let reponse_enigme_coffre_fort="23251181921";

function checkFormEnigmeCoffreFort() {
    event.preventDefault();
    resultatEnigmeCoffreFort();
}

function resultatEnigmeCoffreFort(){
    if (reponse_enigme_coffre_fort==document.getElementById("reponse_coffre_fort").value)
        {
            document.getElementById("correct-popup").classList.toggle("active"); 
        }
    else 
    if (reponse_enigme_coffre_fort!=document.getElementById("reponse_coffre_fort").value)
        {
            document.getElementById("incorrect-popup").classList.toggle("active");
        }
}












function togglePopup1(){
    document.getElementById("correct-popup").classList.toggle("active");
}

function togglePopup2(){
    document.getElementById("incorrect-popup").classList.toggle("active");
}