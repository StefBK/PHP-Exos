<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <!-- Do While (s'exécute au moins une fois même si la condition est fausse) -->
        
        <?php
            $nom="Sandrine";
            $nb=strlen($nom);
            $cpt=0;
            do{
                echo($nom[$cpt]." ");
                $cpt++;
            } while($cpt<$nb);
        ?>
    </body>
</html>