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
            // Boucle qui compte jusqu'à 10
            $ligne=1;
            echo("<table>");
            while($ligne<11){
                echo("<tr><td>");
                echo $ligne;
                echo("</td></tr>");
                $ligne++;
            }
            echo("</table>");

            ?>
        </p>
    </body>
</html>