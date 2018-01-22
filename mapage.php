<?php


session_start();


?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title> ma page</title>

    </head>

    <body>

    <p>YO poto !</p>

    <p>

        T'est pas ce  <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />

        sale vieux <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D

    </p>

    </body>

</html>