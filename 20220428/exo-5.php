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
            $valeur=15;
            if($valeur<13){
                echo("Vous êtes mineur, interdits les films coquins !");
            }
            else if ($valeur<18){
                echo("Vous êtes mineur mais vous serez bientôt autorisé à voir les films coquins !");
            }
            else{
                echo("Vous êtes majeur, vous êtes autorisé à voir les films coquins !");
            }

            // for = boucle séquentielle
            // for each = boucle associative
            // Différence entre FOR et WHILE : FOR est un compteur
            for($valeur=1;$valeur<11;$valeur++){
                echo $valeur."<br/>";
            }
            ?>
        </p>
    </body>
</html>