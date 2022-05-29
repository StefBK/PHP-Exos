<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <?php
            // nombre est un élément de tableau initialement vide et prend chaque valeur de i
            // Autre écriture du FOR avec plusieurs variables et fermeture avec un ; sans accolades car toutes les actions souhaitées de la boucle sont dans la parenthèse
            for($i=0,$total=0;$i<=5;$total+=$i,$nombre[]=$i++);
            // Concaténation des données d'un tableau sans spécifier l'index
            echo implode('+',$nombre)."=".$total;
            // echo $nombre; ne fonctionne pas car c'est un ARRAY
            // Écriture habituelle :
            // $total=0;
            // for($i=0;$i<=5;$i++){
            //     $total+=$i;
            //     $nombre[]=$i;
            //     echo $nombre[$i];
            // }
        ?>
    </body>
</html>