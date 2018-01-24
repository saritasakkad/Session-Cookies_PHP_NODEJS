

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

        <title>Traitement des données envoyées par formulaire</title>

    </head>

    <body>
       <?php
        $username = htmlspecialchars($_POST["username"]);
        $name = htmlspecialchars($_POST["name"]);
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        echo "les données du formulaire ont été mémorisées.<br>";
        echo "<a href=\"lecture-session.php\">Cliquez sur ce lien pour vérifier.</a>";
       ?>
    </body>

</html>


