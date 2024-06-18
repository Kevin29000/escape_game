<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="layout/layout_map.css">
        <script src="app.js" defer></script>
        <title>
            Escape Game | Carte
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

        <p class="text">Votre exploration est limitée au premier étage du au mauvais état des escaliers et des étages supérieurs</p>

        <div class="map-container">
            <div class="clickable-area entrance" onclick="location.href='enigme_statues.php';"></div>
            <div class="clickable-area drinng-room" onclick="location.href='dining-room.html';"></div>
            <div class="clickable-area library" onclick="location.href='library.php';"></div>
            <div class="clickable-area auting-room" onclick="location.href='enigme_thermopyles.php';"></div>
            <div class="clickable-area droiwing-room" onclick="location.href='enigme_coffre_fort.php';"></div>
        </div>
    </body>
</html>