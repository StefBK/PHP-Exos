<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 22</title>
        <!-- <link rel="stylesheet" href="css/main.css" /> -->
    </head>
    <body>
        <?php

        // Évite l'affichage des messages Supprime les WARNINGS mais pas les messages d'ERREUR. Désactivé dans le PHP.INI. Pour le réactiver, passer le SET WARNING à ON. Dans le code, passer le ERROR REPORTING à 1
        error_reporting(0);
        // echo 1,2,3,"up";
        // print(1,2,3,"up");
        // =>Ne fonctionne pas, le print ne peut afficher qu'un seul argument.
        // print("123up");
        // PRINT R affiche les éléments d'un tableau et ses valeurs
        // PRINT F permet de formater les valeurs

        // Afficher la valeur en base 10 avec 2 décimales
        // 1 : On prend une valeur
        // .2f on veut 2 décimales 

        $nombre=89;
        printf("%1.2f €",$nombre);
        echo("<br/>");
        echo(str_repeat("*",80));
        echo("<br/>");
        // Afficher la valeur en binaire
        $nombre=89;
        printf("%b",$nombre);
        echo("<br/>");
        echo(str_repeat("*",80));
        echo("<br/>");
        // Afficher la valeur en hexa
        $nombre=200;
        printf("%X",$nombre);
        echo("<br/>");
        echo(str_repeat("*",80));
        echo("<br/>");

        // Normalisation du traitement des caracères
        echo("<br/>");
        $nom="MudaT";
        $prenom="AlbeRT";
        $adresse="25, Rue du Ha hA";
        $ville="26000 VAlence";
        $mail="GEEK@gmail.com";

        $nom=strtoupper($nom);
        $prenom=ucfirst(strtolower($prenom));
        $adresse=ucwords(strtolower($adresse));
        $ville=strtoupper($ville);
        $mail=strtolower($mail);

        echo $nom." ".$prenom."<br/>".$adresse."<br/>".$ville."<br/>".$mail;

        ?>
    </body>
</html>