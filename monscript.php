<?php


session_start();


?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>je minscri</title>

    </head>

    <body>

    <p>the big !</p>

    <p>

       c'est moi le Boss <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />

        dans ma téte j'ai 15 ans mais en realiter j'ai <?php echo $_SESSION['age']; ?> ans, si si ! :-D

    </p>

    </body>

</html>