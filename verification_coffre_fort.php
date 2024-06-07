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
            header('location:accueil.php?message=Bravo vous avez trouvé la solution !');
         }
    else
        {
            header('location:connexion.php?message=Erreur de connexion');
        }

$fin="</body></html>";
echo $debut.$corps.$fin;