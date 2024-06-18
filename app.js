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

/*let countdownDate = new Date("June 14, 2024 12:58:00") // c'est la variable de base du programme*/

/*let countdownDate = new Date();
countdownDate.setHours(countdownDate.getHours() +2);
let countdownTimestamp = countdownDate.getTime();*/

/*
document.addEventListener("DOMContentLoaded", function() {
    let countdownElement = document.querySelector("#countdown");
    let countdownDate;

    if (localStorage.getItem("countdownEnd")) {
        countdownDate = new Date(parseInt(localStorage.getItem("countdownEnd")));
    }
    else {
        countdownDate = new Date();
        countdownDate.setHours(countdownDate.getHours() + 2);
        localStorage.setItem("countdownEnd", countdownDate.getTime())
    }               // Initialisation du countdown V2 */


document.addEventListener("DOMContentLoaded", function() {
    let countdownElement = document.querySelector("#countdown");
    let countdownDate;

    function startCountdown() {
        countdownDate = new Date();
        countdownDate.setHours(countdownDate.getHours() + 2);
        localStorage.setItem("countdownEnd", countdownDate.getTime())
    }
    
    if (localStorage.getItem("countdownEnd")) {
        countdownDate = new Date(parseInt(localStorage.getItem("countdownEnd")));
    }
    else {
        startCountdown();
    }

let x = setInterval(function(){ // setInterval cré un interval d'une seconde pour rafréchir la variable
    let now = new Date().getTime(); // getTime prend la date actuel et la met dans l'objet date donc dans la variable now
    let distance = countdownDate - now; // distance devient le compte à rebour, il indique chaque seconde 
    let hours = Math.floor(distance % (1000*60*60*24) / (1000*60*60));
    let minutes = Math.floor(distance % (1000*60*60) / (1000*60));
    let seconds = Math.floor(distance % (1000*60) / (1000));
    
    document.querySelector("#countdown").innerHTML = `
        <div class="tag_countdown">
            <span class="label_countdown">Temps restant</span>
        </div>
        <div class="tag_countdown">
            <span class="value_countdown">${hours}</span>
            <span class="label_countdown">Heures</span>
        </div>
        <div class="tag_countdown">
            <span class="value_countdown">${minutes}</span>
            <span class="label_countdown">Minutes</span>
        </div>
        <div class="tag_countdown">
            <span class="value_countdown">${seconds}</span>
            <span class="label_countdown">Secondes</span>
        </div>
        <button id="restartButton">Recommancer</a></button>
    `; // les deux `` servent à appeler une variable JavaScript dans une partie html avec : ${nom_variable}

    document.getElementById("restartButton").addEventListener("click", function() {
        window.location.href = "accueil.php"; // Il doit etre dans la même parenthèse que restartButton dans le innerHTML
    });

    if(distance < 0){
        clearInterval(x);
        document.querySelector("#countdown").innerHTML = "<span class='countdown_end'>Le temps est écoulé !</span>";
    }
}, 1000); // la seconde de l'interval

    document.getElementById("startButton").addEventListener("click", function() {
        startCountdown();
        window.location.href = "map.php"; // Pour changer de page
    });
});