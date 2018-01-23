<?php

session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Lecture des variable de session prenom et nom</title>

    </head>

    <body>
       <?php
        $prenom = $_SESSION["prenom"];
        $nom = $_SESSION["nom"];
        echo "les données du formulaire ont été mémorisées.<br>";
        echo "<a href=\"lecture-session.php\">Cliquez sur ce lien pour vérifier.</a>";
       ?>
    </body>

</html>