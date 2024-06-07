<?php
$debut="<!doctype html>
<html>
    <head>
        <title>
            Verification enigme carte
        </title>
    </head>
    <body>";
    $corps="";
    if (($_POST['reponse_enigme_carte_1']=="Perse") && ($_POST['reponse_enigme_carte_2']=="Egypte") && ($_POST['reponse_enigme_carte_3']=="Babylone") && ($_POST['reponse_enigme_carte_4']=="Macédoine"))
        {
           header('location:../accueil.php?message=Bravo vous avez trouvé la solution !');
        }
    else
       {
           header('location:../enigme_carte.php?message=Les réponses sont incorrects');
       }

$fin="</body></html>";
echo $debut.$corps.$fin;