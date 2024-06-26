<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="layout/layout_library.css">
        <script src="app.js"></script>
        <title>
            Escape Game | Library
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
            <button id="restartButton">Recommancer</a></button>
        </div> 
        Un très ancien voyageur anonyme à laisser cette carte antique. Des indices sont dispersés un peut partout dans la pièce, des parchemins ou il <br>
        raconte son parcours à travers le monde antique.
	    
        <div class="map-container">
            <div class="clickable-area map" onclick="location.href='enigme_carte.php';"></div>
            <div class="clickable-area indice_1" onclick="location.href='indices/indice_enigme_carte_1.php';"></div>
            <div class="clickable-area indice_2" onclick="location.href='indices/indice_enigme_carte_2.php';"></div>
            <div class="clickable-area indice_3" onclick="location.href='indices/indice_enigme_carte_3.php';"></div>
            <div class="clickable-area indice_4" onclick="location.href='indices/indice_enigme_carte_4.php';"></div>
        </div>

        <li><a href="map.php">Carte</a></li>
    </body>
</html>