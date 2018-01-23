<?php

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
        $prenom = htmlspecialchars($_POST["prenom"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $_SESSION['prenom'] = 'Akkad';
        $_SESSION['nom'] = 'BeCode';
        echo "les données du formulaire ont été mémorisées.<br>";
        echo "<a href=\"lecture-session.php\">Cliquez sur ce lien pour vérifier.</a>";
       ?>
    </body>

</html>


