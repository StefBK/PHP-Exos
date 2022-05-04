<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 28</title>
        <link rel="stylesheet" href="css/main28.css" />
    </head>
    <body>
        <h1></h1>
        <?php
        // error_reporting(0);
        // $villes=array('Drôme'=>'Valence','Portes-lès-Valence','Bourg-lès-Valence','Romantique'=>array('Venise','Baleares','Madère'));
        $villes=array('v'=>'Valence','p'=>'Portes-lès-Valence','b'=>'Bourg-lès-Valence','n'=>'Venise','i'=>'Baleares','m'=>'Madère');
        // echo $villes['Drôme'][0];//=>V
        // echo $villes['Drôme'][1];//=>a
        // foreach($villes as $indice=>$valeur){
            // echo $valeur."<br/>";
            // echo[$indice]."<br/>";
            // foreach($valeur as $keys=>$val){
                // echo $valeur;
                // echo $val."<br/>";
                // echo $ville[$indice]."<br/>";
        //     }
        // }
        foreach($villes as $indice=>$valeur){
            echo $indice."=>".$valeur."<br/>";
        }
        ?>
    </body>
</html>