<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="layout/layout_enigme_thermopyles.css">
        <script src="app.js"></script>
        <title>
            Escape Game | Enigme thermopyles
        </title>
    </head>
    <body>
        <div id="countdown">
            <div class="tag_countdown">
                <span class="label_countdown">Temps restant</span>
            </div>
            <div class="tag_countdown">
                <span class="value_countdown">--</span>
                <span class="label_countdown">Heures</span>
            </div>
            <div class="tag_countdown">
                <span class="value_countdown">--</span>
                <span class="label_countdown">Minutes</span>
            </div>
            <div class="tag_countdown">
                <span class="value_countdown">--</span>
                <span class="label_countdown">Secondes</span>
            </div>
        </div> 
        <div class="map-container">
            <div class="clickable-area indice_300" onclick="location.href='indices/indice_enigme_thermopyles.php';"></div>
            <div class="clickable-area indice_gps" onclick="location.href='indices/indice_enigme_thermopyles_2.php';"></div>
            <div class="clickable-area indice_lettres" onclick="location.href='indices/indice_enigme_thermopyles_3.php';"></div>
        </div>

        <form name="enigme_thermopyles" action="#"><!-- <form action="verification/verification_enigme_thermopyles.php" target="" method="post"> -->
            Saisir le nom de la bataille : <input type="text" name="test_reponse" id="test_reponse">
            <button onclick="checkFormEnigmeThermopyles()">Valider</button> 
	    </form>

        <li><a href="map.php">Carte</a></li><br>

        <div class="popup" id="correct-popup">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopup1()">&times;</div>
                <h1>Bonne réponse</h1>
                <p>Bravo, vous avez trouvé la solution ! Vous pouvez passer à la salle suivante.</p>
            </div>
        </div>

        <div class="popup" id="incorrect-popup">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopup2()">&times;</div>
                <h1>Mauvaise réponse</h1>
                <p>La réponse est incorrecte. Veuillez réessayer.</p>
            </div>
        </div>
    </body>
</html>