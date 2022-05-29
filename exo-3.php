<?php
    // Déclaration des variables qui seront utilisées dans le second module PHP.
    $nom="Jean Aymar";
    $titre_du_jour="Vivent les Geeks !";
    $date=date("d/m/Y");
    $heure=date("H:i:s");
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
            <?php
                echo("Bonjour ".$nom."<br/>");
                echo("Nous sommes le : ".$date.", il est : ".$heure."<br/>");
                // Méthode Sale car une variable n'est pas une chaîne de caractères mais fonctionne.
                echo("Nous sommes le : $date, il est : $heure<br/>");
            ?>
        </p>
    </body>
</html>