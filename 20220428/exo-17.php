<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <?php
            // Random de 1 à 5
            $i=rand(1,5);
            switch($i){
                case 1:
                case 3:
                case 5:
                    echo($i." est un chiffre impair");
                    break;
                default:
                    echo($i." est un chiffre pair");
            }
        ?>
    </body>
</html>