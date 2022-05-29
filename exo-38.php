<?php
    // Une fonction ne commence jamais par un chiffre, toujours par une lettre, souvent un verbe
    //Fonction avec Variable Locale
    function geek(){
        $valeur=10; //Cette variable est locale (portabilité, durée de vie). Elle n'existe qu'au travers de la fonction.
        echo "Vous avez saisi la valeur : ".$valeur."<br/>";
        return $valeur;
    }

    // Il ne suffit pas de faire un RETURN dans la FUNCTION. Mais il faut faire aussi un ECHO en appelant la FUNCTION.
    echo geek();

echo("<br/>");
echo(str_repeat("-",50));
echo("<br/>");

$valeur1=14;
$valeur2=20;
    function calculer($toto,$titi){
        return $toto*$titi;
    }
echo calculer($valeur1,$valeur2);

echo("<br/>");
echo(str_repeat("-",50));
echo("<br/>");

function calculer_2($x,$y){
    echo $x*$y;
}
$valeur1=14;
$valeur2=20;

calculer_2($valeur1,$valeur2);

echo("<br/>");
echo(str_repeat("-",50));
echo("<br/>");

$valeur2=2000;
$valeur1=1.4;

function calculer_3($x,$y=1.22){ //Cette affectation ne sert à rien
    echo "Le taux est de : ".$y."<br/>";
    echo "Le montant emprunté est de : ".$x."<br/>";
    echo $x*$y;
}

calculer_3($valeur2,$valeur1=1.3); //Cette nouvelle valeur (passage de paramètre en dur) est prioritaire, comme une réinitialisation de valeur2

echo("<br/>");
echo(str_repeat("-",50));
echo("<br/>");

//Fonction sans_static
function sans_static(){
    $a=0;
    $a+=1;
    echo $a."<br/>";
}
sans_static();
sans_static();
sans_static();

echo("<br/>");
echo(str_repeat("-",50));
echo("<br/>");

//Fonction avec_static
function avec_static(){
    // Fonction STATIC pour que la variable garde sa valeur chaque fois que la fonction est exécutée
    static $a;
    $a+=1;
    echo $a."<br/>";
}
avec_static();
avec_static();
avec_static();

echo("<br/>");
echo(str_repeat("-",50));
echo("<br/>");


?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 38</title>
        <link rel="stylesheet" href="css/main31.css" />
    </head>
    <body>
        <h1>Fonctions</h1>
    </body>
</html>