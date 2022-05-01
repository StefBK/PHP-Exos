<?php
    $longueur=5;
    $compteur=0;
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <!-- WHILE new syntaxe avec de l'intégration HTML -->
        <form action="">
        <?php while($compteur++<$longueur):?>
            <input type="text"/>
        <?php endwhile;?>
        </form>
    </body>
</html>