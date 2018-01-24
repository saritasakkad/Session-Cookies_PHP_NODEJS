<?php
include 'config.php';
include 'connexion.php';
include 'request.php';

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
        $prenom = $_SESSION["username"];
        $nom = $_SESSION["name"];
        echo "les données mémorisées dans les variable de session sont 
        bien accessibles :<br><ul>";
        echo "<li>\$_SESSION[\"username\"] vaut ".$_SESSION["username"] . "</li>";
        echo "<li>\$_SESSION[\"name\"] vaut ".$_SESSION["name"] . "</li></ul>";

       ?>
    </body>

</html>