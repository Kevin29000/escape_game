<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="layout/layout_enigme_carte.css">
        <script src="app.js"></script>
        <title>
            Escape Game | Enigme de la carte antique
        </title>
    </head>
    <body>
        <form name="enigme_carte" action="#"><!-- <form action="verification/verification_enigme_carte.php" target="" method="post"> -->
            Un très ancien voyageur anonyme à laisser cette carte antique accompagné d'un parchemin ou il <br>
            raconte son parcours à travers le monde.

            Réflechissez bien avant de répondre, vous disposez d'un nombre de tentatives limité. <br><br>

            Saisir la première destination : <input type="text" name="reponse_enigme_carte_1" id="reponse_enigme_carte_1"><br><br>
            Saisir la deuxième destination : <input type="text" name="reponse_enigme_carte_2" id="reponse_enigme_carte_2"><br><br>
            Saisir la troisième destination : <input type="text" name="reponse_enigme_carte_3" id="reponse_enigme_carte_3"><br><br>
            Saisir la quatrième  destination : <input type="text" name="reponse_enigme_carte_4" id="reponse_enigme_carte_4"><br><br>
            <button onclick="checkFormEnigmeCarte()">Valider</button> 
	    </form>

        <li><a href="library.php">Revenir à la salle</a></li>

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