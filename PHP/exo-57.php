<?php
    // Créer une fonction qui retourne le résultat d'une division avec variables globales
    function diviser($x){
        $a=5;
        if(!$x){
            // Lancement d'une exception avec instanciation de l'exception
            throw new Exception('La division par zéro est impossible, gros bouffon !');
        }
        return $a/$x;
    }
    try{
    //Exécution de la fonction ici
        //echo diviser(5)."<br/>";
        //=>1
        echo diviser(0)."<br/>";
    }
    // $error correspond au message de l'exception
    catch (Exception $error){
    //Traitement si erreur
        //Méthode qui retourne le message d'erreur : GETMESSAGE
        //"->" signifie "exécute"
        echo "Exception reçue : ".$error->getMessage()."<br/>";

        //Méthode qui retourne la ligne où se situe le message d'erreur : GETLINE
        //"->" signifie "exécute"
        echo "Exception reçue : ".$error->getLine()."<br/>";
        
        //Méthode qui retourne le code d'erreur : GETCODE
        //"->" signifie "exécute"
        echo "Exception reçue : ".$error->getCode()."<br/>";

        //Méthode qui retourne le fichier en cause : GETFILE
        //"->" signifie "exécute"
        echo "Exception reçue : ".$error->getFile()."<br/>";
    }
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Compatibilité avec EDGE-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--Compatibilité avec IPHONE-->
        <title>Exercice 57</title>
        <link rel="stylesheet" href="css/main53.css" />
    </head>
    <body>
        <!-- Apprendre à gérer les exceptions. Intercepter les erreurs. Ne jamais laisser un message d'erreur mais retourner un message particulier pour chaque message d'erreur - Avec TRY et CATCH -->
        <!-- Exemple de la division par 0 -->
        <h1>GESTION DES EXCEPTIONS</h1>

        <?php

        ?>
    </body>
</html>
