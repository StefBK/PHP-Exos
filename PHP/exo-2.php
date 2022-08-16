<?php
    echo "Ah que coucou 1 !!!<br/>";
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <p>
            <!-- Pour afficher une information -->
            <?php
                echo("Bonjour les Geeks");
            ?>
            <br/>
            <?php
                echo("Bonjour les Newbees");
            ?>
            <!-- Ci-après le php est implicite -->
            <br/>
            <?='J\'aime le saxo';?>
            <br/>
            <?="J'aime le saxo";?>
            <br/>
            <!-- Le point est l'opérateur de concaténation -->
            <?="J'aime le saxo"."<br/>";?>
            <?='J\'aime \'le\' saxo <br/>';?>
            </p>
    </body>
</html>

<?php
    echo "Ah que coucou 2 !!!<br/>";
?>
