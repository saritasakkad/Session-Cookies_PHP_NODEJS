<?php

include 'config.php';
include 'connexion.php';
include 'request.php';

?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Affiche des cookies</title>

    </head>

    <body>
       <?php
        echo "Le cookie prenom a pour valeur ".$_COOKIE["username"]."<br>";
        echo "Le cookie nom a pour valeur ".$_COOKIE["name"]."<br>";
       ?>
    </body>

</html>