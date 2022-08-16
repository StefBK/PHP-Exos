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
            // Création d'une table de multiplication avec FOR
            echo("<table>");
            for($ligne=1;$ligne<11;$ligne++){
                echo("<tr>");
                for($colonne=1;$colonne<11;$colonne++){
                    echo("<td>");
                    echo($ligne*$colonne);
                    echo("</td>");
                }
                echo("</tr>");            
            }
            echo("</table>");
            ?>
        </p>
    </body>
</html>