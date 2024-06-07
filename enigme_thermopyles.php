<html>
    <head>
        <link rel="stylesheet" href="layout/layout_enigme_thermopyles.css">
        <title>
            Escape Game | Enigme thermopyles
        </title>
    </head>
    <body>
        <div class="map-container">
            <div class="clickable-area indice_300" onclick="location.href='indices/indice_enigme_thermopyles.php';"></div>
            <div class="clickable-area indice_gps" onclick="location.href='indices/indice_enigme_thermopyles_2.php';"></div>
            <div class="clickable-area indice_lettres" onclick="location.href='indices/indice_enigme_thermopyles_3.php';"></div>
        </div>

        <form action="verification_enigme_thermopyles.php" target="" method="post">
            Saisir le nom de la bataille : <input type="text" name="reponse_thermopyles">
            <input type="submit" id="submit" value="Valider">
	    </form>

        <li><a href="map.php">Carte</a></li>
    </body>
</html>