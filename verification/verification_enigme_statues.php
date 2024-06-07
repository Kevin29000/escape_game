<?php
$debut="<!doctype html>
<html>
    <head>
        <title>
            Verification enigme des statues des dieux
        </title>
    </head>
    <body>";
    $corps="";
    if (($_POST['reponse_enigme_statues_1']=="Zeus") && ($_POST['reponse_enigme_statues_2']=="Egypte") && ($_POST['reponse_enigme_statues_3']=="Babylone") && ($_POST['reponse_enigme_statues_4']=="Macédoine") && ($_POST['reponse_enigme_statues_5']=="Macédoine"))
    {
       header('location:../accueil.php?message=Bravo vous avez trouvé la solution !');
    }
    else
    {
        header('location:../enigme_carte.php?message=Les réponses sont incorrects');
    }

$fin="</body></html>";
echo $debut.$corps.$fin;