<?php
$debut="<!doctype html>
<html>
    <head>
        <title>
            Verification enigme thermopyle
        </title>
    </head>
    <body>";
    $corps="";
        if (($_POST['reponse_thermopyles']=="Thermopyles"))
        {
        header('location:accueil.php?message=Bravo vous avez trouvé la solution !');
        }
        else
        {
            header('location:enigmes_thermopyles.php?message=La réponse est incorrect');
        }

$fin="</body></html>";
echo $debut.$corps.$fin;