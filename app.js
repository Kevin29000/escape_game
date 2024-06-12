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
    else // le deuxième if n'est pas indispensable
    if (reponse_enigme_coffre_fort!=document.getElementById("reponse_coffre_fort").value)
        {
            document.getElementById("incorrect-popup").classList.toggle("active");
        }
}

let reponse_enigme_carte_1="Perse";
let reponse_enigme_carte_2="Egypte";
let reponse_enigme_carte_3="Babylone";
let reponse_enigme_carte_4="Macédoine";

function checkFormEnigmeCarte() {
    event.preventDefault();
    resultatEnigmeCarte();
}

function resultatEnigmeCarte(){
    let answer1 = document.getElementById("reponse_enigme_carte_1").value;
    let answer2 = document.getElementById("reponse_enigme_carte_2").value;
    let answer3 = document.getElementById("reponse_enigme_carte_3").value;
    let answer4 = document.getElementById("reponse_enigme_carte_4").value;

    if (answer1 == reponse_enigme_carte_1 && answer2 == reponse_enigme_carte_2 && answer3 == reponse_enigme_carte_3 && answer4 == reponse_enigme_carte_4)
        {
            document.getElementById("correct-popup").classList.toggle("active"); 
        }
    else 
        {
            document.getElementById("incorrect-popup").classList.toggle("active"); 
        }
}

let reponse_enigme_statues_1="Zeus";
let reponse_enigme_statues_2="Athéna";
let reponse_enigme_statues_3="Poséidon";
let reponse_enigme_statues_4="Hermès";
let reponse_enigme_statues_5="Artémis";

function checkFormEnigmeStatues() {
    event.preventDefault();
    resultatEnigmeStatues();
}

function resultatEnigmeStatues(){
    let answer1 = document.getElementById("reponse_enigme_statues_1").value;
    let answer2 = document.getElementById("reponse_enigme_statues_2").value;
    let answer3 = document.getElementById("reponse_enigme_statues_3").value;
    let answer4 = document.getElementById("reponse_enigme_statues_4").value;
    let answer5 = document.getElementById("reponse_enigme_statues_5").value;

    if (answer1 == reponse_enigme_statues_1 && answer2 == reponse_enigme_statues_2 && answer3 == reponse_enigme_statues_3 && answer4 == reponse_enigme_statues_4 && answer5 == reponse_enigme_statues_5)
        {
            document.getElementById("correct-popup").classList.toggle("active"); 
        }
    else 
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