<html>
    <head>
        <link rel="stylesheet" href="layout/layout_enigme_statues.css">
        <title>
            Escape Game | Enigme des statues des dieux
        </title>
    </head>
    <body>
        <div class="map-container">
            <div class="clickable-area indice_1" onclick="location.href='indices/indice_enigme_statues_1.php';"></div>
            <div class="clickable-area indice_2" onclick="location.href='indices/indice_enigme_statues_2.php';"></div>
            <div class="clickable-area indice_3" onclick="location.href='indices/indice_enigme_statues_3.php';"></div>
            <div class="clickable-area indice_4" onclick="location.href='indices/indice_enigme_statues_4.php';"></div>
            <div class="clickable-area indice_5" onclick="location.href='indices/indice_enigme_statues_5.php';"></div>
        </div>

        <form action="verification/verification_enigme_statues.php" target="" method="post">
            Saisir le nom de la première statue : <input type="text" name="reponse_enigme_statues_1"><br><br>
            Saisir le nom de la deuxième statue : <input type="text" name="reponse_enigme_statues_2"><br><br>
            Saisir le nom de la troisième statue : <input type="text" name="reponse_enigme_statues_3"><br><br>
            Saisir le nom de la quatrième statue : <input type="text" name="reponse_enigme_statues_4"><br><br>
            Saisir le nom de la cinquième statue : <input type="text" name="reponse_enigme_statues_5"><br><br>

            <input type="submit" id="submit" value="Valider">
	    </form>

        <li><a href="map.php">Revenir à la carte</a></li>
    </body>
</html>