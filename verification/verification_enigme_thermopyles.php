<?php
$debut="<!doctype html>
<html>
    <head>
        <title>
            Verification enigme thermopyle
            <script src='../test.js'></script>
        </title>
    </head>
    <body>";
    $corps="";
        if (($_POST['reponse_thermopyles']=="Thermopyles"))
        {
            $corps.="<script type='text/javascript'>
                        function togglePopup1(){
                            document.getElementById('correct-popup').classList.toggle('active');
                            }
                    </script>";
        }
        else
        {
            $corps.="<script type='text/javascript'>togglePopup2()</script>";
        }

$fin="</body></html>";
echo $debut.$corps.$fin;