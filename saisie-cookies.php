<?php

include 'config.php';
include 'connexion.php';
include 'request.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice sur les cookies</title>
</head>
<body>
    <form name="MonFormulaire"  method="post" action="traitement2.php">
        <label>Prénom</label>
         <input type="text" name="username">
        <label>Nom</label>
         <input type="text" name="name">
        <input type="submit" name="users" value="Envoyer">
    </form>
</body>
</html>