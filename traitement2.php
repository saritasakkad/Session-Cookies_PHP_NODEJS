<?php
include 'config.php';
include 'connexion.php';
include 'request.php';


    if (isset($_POST["username"]))
        setcookie("username", $_POST["username"], time()+24*3600, null, null, false, true);

    if (isset($_POST["name"]))
        setcookie("name", $_POST["name"], time()+24*3600, null, null, false, true);

?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Traitement des données envoyées par formulaire</title>

    </head>

    <body>
       
        
       les cookies nom et prenom ont été mémorisées.<br><br>
        <a href="verif-cookies.php">Cliquez ici pour le vérifier.</a>
       
    </body>

</html>
