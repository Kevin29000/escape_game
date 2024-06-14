<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="layout/layout_coffre_fort.css">
        <script src="app.js"></script>
        <title>
            Escape Game | Coffre Fort
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
        <form name="enigme_coffre_fort"> <!-- <form action="verification/verification_enigme_coffre_fort.php" target="" method="post"> -->
            Vous entrez dans une pièces vide avec seulement un grand coffre au centre. <br>
            Pris de curiosité vous cherchez un moyen de l'ouvrir pour découvrir ce qu'il <br>
            peut bien renfermer. <br>
            Vous devez chercher le code secret qui déverouille ce coffre mystérieux, à vous <br>
            de bien observer pour trouver la solution <br><br>

            Réflechissez bien avant de répondre, vous disposez d'un nombre de tentatives limité. <br><br>

            Saisir la réponse : <input type="text" name="reponse_coffre_fort" id="reponse_coffre_fort">
            <button onclick="checkFormEnigmeCoffreFort()">Valider</button> 
	    </form>

        <li><a href="map.php">Carte</a></li>

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