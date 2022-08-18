
<?php

$a=10;
$b=0;
try {
    if ($b==0)
        throw new Exception("Le dénominateur ne doit pas être nul.","553");
    $c=$a/$b;
    echo $c;
} catch (Exception $e) {
    $erreur="Document : ".$e->getFile()."</br/>";
    $erreur.="Ligne : ".$e->getLine()."</br/>";
    $erreur.="Code d'Erreur : ".$e->getCode()."</br/>";
    $erreur.="Message d'Erreur : ".$e->getMessage()."</br/>";
    echo $erreur;
}
//Possibilité de rajouter un bloc "final" qui s'exécute que le travail soit fonctionnel ou qu'un message d'erreur soit affiché
//Mais information non utilie pour prévenir qui "pollue le code"
