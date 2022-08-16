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
            // Création d'une boucle qui va compter jusqu'à 10
            echo("<table>");
            for($compteur=1;$compteur<11;$compteur++){
                echo("<tr><td>");
                echo $compteur."<br/>";
                echo("</td></tr>");            
            }
            echo("</table>");

            ?>
        </p>
    </body>
</html>