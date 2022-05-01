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
            // Création d'une table de multiplication avec WHILE
            $ligne=1;
            $colonne=1;
            echo("<table>");
            // On parcourt les lignes de la table de multiplication
            while($ligne<11){
                echo("<tr>");
                // On parcourt les colonnes de la table de multiplication
                while($colonne<11){
                    echo("<td>");
                        echo($ligne*$colonne);
                    echo("</td>");
                    $colonne++;
                }
                echo("</tr>");
                $ligne++;
                $colonne=1;
            }
            echo("</table>");
            ?>
        </p>
    </body>
</html>