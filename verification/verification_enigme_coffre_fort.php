<?php
$debut="<!doctype html>
<html>
    <head>
        <title>
            identificaton
        </title>
    </head>
    <body>";
    $corps="";
    if (($_POST['reponse_coffre_fort']=="23251181921"))
         {
            header('location:../accueil.php?message=Bravo vous avez trouvé la solution !');
         }
    else
        {
            header('location:../enigme_carte.php?message=Les réponses sont incorrects');
        }

$fin="</body></html>";
echo $debut.$corps.$fin;