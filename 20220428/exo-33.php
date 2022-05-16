<!-- Souvent faire le code PHP en haut de la page -->
<?php
    $tableau=array("Ah que coucou","les Geeks DWWM");
    //IMPLODE joint des éléments de TABLEAU
    echo implode('/',$tableau)."<br/>";

    //EXPLODE découpe des éléments de TABLEAU
    $chaine=explode("/","Ah que coucou / le/s Geeks DWWM");
        foreach($chaine as $valeur){
            echo $valeur."<br/>";
        }

    echo("<br/>");
    echo str_repeat("___",50);
    echo("<br/>");

?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 33</title>
        <link rel="stylesheet" href="css/main31.css" />
    </head>
    <body>
        <h1>Variables Super Globales</h1>
        
    </body>
</html>