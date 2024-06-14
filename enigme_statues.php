<html>
    <head>
        <link rel="stylesheet" href="layout/layout_enigme_statues.css">
        <script src="app.js"></script>
        <title>
            Escape Game | Enigme des statues des dieux
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
            <div class="clickable-area indice_1" onclick="location.href='indices/indice_enigme_statues_1.php';"></div>
            <div class="clickable-area indice_2" onclick="location.href='indices/indice_enigme_statues_2.php';"></div>
            <div class="clickable-area indice_3" onclick="location.href='indices/indice_enigme_statues_3.php';"></div>
            <div class="clickable-area indice_4" onclick="location.href='indices/indice_enigme_statues_4.php';"></div>
            <div class="clickable-area indice_5" onclick="location.href='indices/indice_enigme_statues_5.php';"></div>
        </div>

        <form name="enigme_statues" action="#"> <!-- <form action="verification/verification_enigme_statues.php" target="" method="post"> -->
            Saisir le nom de la première statue : <input type="text" name="reponse_enigme_statues_1" id="reponse_enigme_statues_1"><br><br>
            Saisir le nom de la deuxième statue : <input type="text" name="reponse_enigme_statues_2" id="reponse_enigme_statues_2"><br><br>
            Saisir le nom de la troisième statue : <input type="text" name="reponse_enigme_statues_3" id="reponse_enigme_statues_3"><br><br>
            Saisir le nom de la quatrième statue : <input type="text" name="reponse_enigme_statues_4" id="reponse_enigme_statues_4"><br><br>
            Saisir le nom de la cinquième statue : <input type="text" name="reponse_enigme_statues_5" id="reponse_enigme_statues_5"><br><br>
            <button onclick="checkFormEnigmeStatues()">Valider</button> 
	    </form>

        <li><a href="map.php">Revenir à la carte</a></li>

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
                <p>Les réponse sont incorrectes. Veuillez réessayer.</p>
            </div>
        </div>
    </body>
</html>