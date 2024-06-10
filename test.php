<!doctype html>
<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="test.css">
        <script src="app.js"></script>
    </head>
    <body>
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

        <button onclick="togglePopup1()">Show Popup correct</button> 
        <button onclick="togglePopup2()">Show Popup incorrect</button>
    </body>
</html>