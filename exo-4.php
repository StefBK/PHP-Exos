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
            // Déclaration des variables

            // Affectation par valeur
            $mavar1="Paris";
            echo $mavar1."<br/>";
            
            // Affectation par valeur en ajoutant un S au pluriel
            $fruit="Poire";
            echo "Une $fruit ne coûte pas cher<br/>";
            echo "Deux {$fruit}s ne coûtent pas cher<br/>";
            echo "Deux $fruit s ne coûtent pas cher<br/>";
            echo "Deux ".$fruit."s ne coûtent pas cher<br/>";
            echo "Deux ${fruit}s ne coûtent pas cher<br/>";

            // Affectation par valeur
            $x=1;
            $y=$x;
            echo $y."<br/>";

            $x=2;
            echo $x."<br/>";
            echo $y."<br/>";
            // Même en réinitialisant x, y reste à 1. Il aurait fallu remettre $y=$x après.
            $x=3;
            $y=$x;
            echo $x."<br/>";
            echo $y."<br/>";

            // Affectation par valeur sur 3 variables
            $x=$y=$z=0;
            echo $x."<br/>";
            echo $y."<br/>";
            echo $z."<br/>";

            // Affectation de variable par référence
            $val1="Titi";
            $val2=&$val1;
            echo $val1."<br/>";
            echo $val2."<br/>";
            $val2="Grosminet";
            echo $val1."<br/>";
            echo $val2."<br/>";
            // Ici, la réinitialisation de val2 affecte automatiquement sa valeur à val1, variable définie comme une référence, elle prendra pour valeur...

            $a=10;
            $b=20;
            $a=$b;
            echo $a."<br>";
            echo $b."<br>";
            // a a pris la valeur de b : 20
            $a=50;
            echo $b."<br>";
            // La valeur de b n'a pas été affectée
            $a=&$b;
            // a est le conteneur et b est le contenant
            // Utilisé quand on veut changer la valeur de a et affecter la valeur de b automatiquement
            $a=50;
            echo $a."<br>";
            echo $b."<br>";
            // b prend la valeur de a : 50
            $b=40;
            // a prend la valeur de b : 40
            echo $a."<br>";
            echo $b."<br>";
            $a=100;
            echo $a."<br>";
            echo $b."<br>";
            // b prend la valeur de a : 100
            // Les 2 variables sont liées par référence

            // Déclaration d'une constante (souvent en majuscules)
            define("PI",3.14159);
            $rayon=10;
            $aire=$rayon*PI;
            echo $aire."<br>";

            // Les opérateurs arithmétiques
            $x=5;
            $y=2;
            echo $x."<br/>";
            echo $y."<br/>";
            echo $x+$y."<br/>";
            echo $x-$y."<br/>";
            echo $x*$y."<br/>";
            echo $x/$y."<br/>";
            // Modulo (reste de la division) :
            echo $x%$y."<br/>";
            // Exponentiel (puissance) :
            echo $x**$y."<br/>";

            echo $x++."<br/>";
            // =>x=5 pas encore incrémenté mais incrémenté après l'echo. On visualise après
            echo $x."<br/>";
            echo ++$x."<br/>";
            // =>x=7 déjà incrémenté avant l'echo. 
            // Idem pour les --

            $x=5;
            echo $x--."<br/>";
            // =>x=5 pas encore décrémenté mais décrémenté après l'echo. On visualise après
            echo $x."<br/>";
            echo --$x."<br/>";
            // =>x=3 déjà décrémenté avant l'echo. 

            // Les opérateurs combinés
            $val1=5;
            $val1=$val1+1;
            echo $val1."<br/>";

            $val1=5;
            $val1+=1;
            echo $val1."<br/>";

            $val1=5;
            $val1-=1;
            echo $val1."<br/>";

            $toto=5;
            $val2="1toto";
            $total=$toto+$val2;
            echo $total."<br/>";
            // Retourne + avec un message warning "Notice: A non well formed numeric value encountered in C:\wamp64\www\PHP_2022_04_28_DWWM\exo-4.php on line 130"
            // set warning dans php.ini peut être paramétré sur OFF (d'office sur ON)
            ?>
        </p>
    </body>
</html>