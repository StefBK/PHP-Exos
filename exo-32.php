<!-- Souvent faire le code PHP en haut de la page -->
<?php
    // Mélange dans un tableau de données tant texte que numériques
    $nombres=array('zero','un','deux','trois','5'=>'cinq','moins'=>'-');
    foreach($nombres as $indice=>$valeur){
        //echo $valeur."<br/>";
        //zero
        //un
        //deux
        //trois
        //cinq
        //-
        echo $indice."=>".$valeur."<br/>";
        //0=>zero
        //1=>un
        //2=>deux
        //3=>trois
        //5=>cinq
        //moins=>-
    }
    echo("<br/>");
    echo str_repeat("___",50);
    echo("<br/>");
    foreach($nombres as $nombre){
        echo $nombre."<br/>";
        //zero
        //un
        //deux
        //trois
        //cinq
        //-
        }
        echo("<br/>");
        echo str_repeat("___",50);
        echo("<br/>");
        // Éviter de faire un FOREACH dans un FOREACH
    // Pour éviter FOREACH imbriqués dans un tableau à 2 dimensions
    $capitales=[['France','Paris'],['ITALIE','Rome']];
    foreach($capitales as list($pays,$ville)){
        echo $pays."=>".$ville."<br/>";
        //France=>Paris
        //ITALIE=>Rome
    }
    echo("<br/>");
    echo str_repeat("___",50);
    echo("<br/>");
    foreach($capitales as [$pays,$ville]){
        echo $pays."=>".$ville."<br/>";
        //France=>Paris
        //ITALIE=>Rome
    }
    echo("<br/>");
    echo str_repeat("___",50);
    echo("<br/>");
    $capitale=[['Pays'=>'France','Ville'=>'Paris'],['Pays'=>'ITALIE','Ville'=>'Rome']];
    foreach($capitale as list('Pays'=>$pays,'Ville'=>$ville)){
        echo $pays." : ".$ville."<br/>";
        //France=>Paris
        //ITALIE=>Rome
    }
    echo("<br/>");
    echo str_repeat("___",50);
    echo("<br/>");

?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 32</title>
        <link rel="stylesheet" href="css/main31.css" />
    </head>
    <body>
        <h1>Accéder à un élément d'un tableau</h1>
        
    </body>
</html>