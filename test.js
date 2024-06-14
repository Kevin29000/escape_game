/*let countdownDate = new Date("June 14, 2024 12:58:00") // c'est la varable de base du programme*/

let countdownDate = new Date();
countdownDate.setHours(countdownDate.getHours() +2);
let countdownTimestamp = countdownDate.getTime();

let x = setInterval(function(){ // setInterval cré un interval d'une seconde pour rafréchir la variable
    let now = new Date().getTime(); // getTime prend la date actuel et la met dans l'objet date donc dans la variable now
    let distance = countdownDate - now; // distance devient le compte à rebour, il indique chaque seconde 
    let days = Math.floor(distance / (1000*60*60*24));
    let hours = Math.floor(distance % (1000*60*60*24) / (1000*60*60));
    let minutes = Math.floor(distance % (1000*60*60) / (1000*60));
    let seconds = Math.floor(distance % (1000*60) / (1000));
    
    document.querySelector("#countdown").innerHTML = `
        <div class="tag_countdown">
            <span class="value_countdown">${days}</span>
            <span class="label_countdown">Jours</span>
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
    `; // les deux `` servent à appeler une variable JavaScript dans une partie html avec : ${nom_variable}

    if(distance < 0){
        clearInterval(x);
        document.querySelector("#countdown").innerHTML = "<span class='countdown_end'>Le temps est écoulé !</span>";
    }
}, 1000); // la seconde de l'interval














/*
function togglePopup1(){
    document.getElementById("correct-popup").classList.toggle("active");
}

function togglePopup2(){
    document.getElementById("incorrect-popup").classList.toggle("active");
}
*/