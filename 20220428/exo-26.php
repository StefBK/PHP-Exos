<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 26</title>
        <link rel="stylesheet" href="css/main26.css" />
    </head>
    <body>
        <h1>Manipuler des Chaînes de Caractères</h1>
        <?php
        echo("<h2>strlen</h2>");
        $x="Ah Que Coucou !";
        echo strlen($x)."<br/>";
        echo str_repeat("__",120);

        echo("<h2>strtolower strtoupper ucfirst lcfirst ucwords </h2>");
        $x='ALBERT MUDAT';
        $y='albert mudate';
        // . et , sont des opérateurs de concaténation identiques
        echo "strtolower ('$x')=".strtolower($x),"<br/>";
        echo "strtoupper ('$y')=".strtoupper($y),"<br/>";
        echo "ucfirst ('$y')=".ucfirst($y),"<br/>";
        echo "lcfirst ('$x')=".lcfirst($x),"<br/>";
        echo "ucwords ('$y')=".ucwords($y),"<br/>";
        echo str_repeat("__",120);

        echo("<h2>sprintf</h2>");
        echo("Mise en forme de la date<br/>");
        echo(sprintf('%02d/%02d/%04d',4,5,2022)."<br/>");
        echo("Affichage d'un nombre à 2 décimales et d'un nombre à 1 décimales<br/>");
        echo(sprintf('%01.2f - %01.2f',1/3,12345678.9)."<br/>");
        echo str_repeat("__",120);

        echo("<h2> number_format </h2>");
        $x=1234.567;
        echo "number_format : ($x) = ".number_format($x)."<br/>"; //Affiche les entiers sans décimales => number_format : (1234.567) = 1,235
        echo "number_format : ($x) = ".number_format($x,1)."<br/>"; //Affiche les entiers sans séparateur de milliers et avec 1 décimale => number_format : (1234.567) = 1,234.6
        echo "number_format : ($x) = ".number_format($x,2,',',' ')."<br/>"; //Affiche les entiers avec le séparateur de milliers et 2 décimales => number_format : (1234.567) = 1 234,57
        echo "number_format : ($x) = ".number_format($x,3,',',' ')."<br/>"; //Affiche les entiers avec le séparateur de milliers et 2 décimales => number_format : (1234.567) = 1 234,567
        echo str_repeat("__",120);

        echo("<h2>ltrim rtrim trim</h2>");
        echo("DESC<br/>");
        $chaine="    toto    ";
        echo("Nombre de caractères avant traitement".strlen($chaine)."<br/>");
        echo("Suppression en début de chaîne, nombre de caractères : ".strlen(ltrim($chaine))."<br/>");
        echo("Suppression en fin de chaîne, nombre de caractères : ".strlen(rtrim($chaine))."<br/>");
        echo("Suppression en début et en fin de chaîne, nombre de caractères : ".strlen(trim($chaine))."<br/>");
        echo str_repeat("__",120);

        echo("<h2>substr()</h2>");
        $x="Albert Mudat";
        echo("Substr($x,3) : = ".substr($x,3)."<br/>"); //Affiche tous les caractères sauf les 3 premiers (de gauche)
        echo("Substr($x,3,2) : = ".substr($x,3,2)."<br/>"); //Affiche 2 caractères après les 3 caractères de gauche  
        echo("Substr($x,-4) : = ".substr($x,-4)."<br/>"); //Affiche les 4 derniers en partant de droite (les 4 derniers)
        echo("Substr($x,-4,3) : = ".substr($x,-4,3)."<br/>"); //Affiche à partir du 4ème caractère en partant de la droite les 3 caractères suivants
        
        echo("<h2>strpos</h2>"); //Renvoie la position d'un caractère dans une STR - Commence à 0 - strrpos fonctionne également
        $mail="geek@gmail.com";
        $position=strpos($mail,"@");
        echo("La position de votre caractère @ est : ".$position."<br/>");
        $position=strpos($mail,"gmail");
        echo("La position de gmail est : ".$position."<br/>");
        echo str_repeat("__",120);

        echo("<h2>strstr</h2>");
        $mail="geek-@geeks-gmail.com";
        $caractere=strstr($mail,'-');
        echo("La première occurence de - est ".$caractere."<br/>"); //=>-@geeks-gmail.com
        echo str_repeat("__",120);
 
        echo("<h2>stristr</h2>"); //Idem à strstr
        $mail="geek-@geeks-gmail.com";
        $reste=stristr($mail,'geeks');
        echo("La première occurence de geeks est ".$reste."<br/>"); //=>geeks-gmail.com
        echo str_repeat("__",120);

        echo("<h2>strrchr</h2>");
        $mail="geek-@geeks-gmail.com";
        $caractere=strrchr($mail,'-');
        echo("La dernière occurrence de geeks est ".$caractere."<br/>"); //=>-gmail.com
        echo str_repeat("__",120);

        echo("<h2>str_replace</h2>");
        $chaine="Ah Que Coucou !";
        $recherche="u";
        $remplacer="i";
        echo("La chaîne de départ : ".$chaine." devient : ".str_replace($recherche,$remplacer,$chaine)."<br/>"); //=>Ah Qie Coicoi !
        echo str_repeat("__",120);
        ?>

    </body>
</html>