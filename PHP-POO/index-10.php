
<?php

//EXCEPTIONS :
//TRY : Essayer
//CATCH : Attraper l'exception d'erreur
//On ne passe dans le CATCH que si erreur dans le TRY
$a=10;
$b=0;
try { //ESSAYER
    if ($b==0)
        throw new Exception("Le dénominateur ne doit pas être nul.");
    $c=$a/$b;
    echo $c;
} catch (Exception $e) { //ATTRAPER
        echo $e->getMessage();
}
