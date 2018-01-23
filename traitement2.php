<?php
    if (isset($_POST["prenom"]))
        setcookie("prenom", $_POST["prenom"], time()+24*3600, null, null, false, true);

    if (isset($_POST["nom"]))
        setcookie("nom", $_POST["nom"], time()+24*3600, null, null, false, true);

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
