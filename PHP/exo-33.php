<!-- Souvent faire le code PHP en haut de la page -->
<?php
    $tableau=array("Ah que coucou","les Geeks DWWM");
    //IMPLODE joint des éléments de TABLEAU
    echo implode('/',$tableau)."<br/>";

    //EXPLODE découpe des éléments de TABLEAU
    $chaine=explode("/","Ah que coucou / les Geeks DWWM");
        foreach($chaine as $valeur){
            echo $valeur."<br/>";
        }

    $position=strpos("Ah que coucou","u");
    if ($position==4){
        // À chaque redirection, mettre un EXIT derrière
        //header("location:geek.php");
        //exit();
        echo "La position du caractère est : ".$position;
        //La position du caractère est : 4
    }   
    // Les Super Globales (car ce sont des tableaux associatifs)
    //$_SERVER['SERVER_NAME']; //Nom Serveur
    //$_SERVER['PHP_SELF']; //Nom Fichier et Emplacement
    //$_GET['']; //Nom Formulaire directement dans l'URL
    //$_POST['']; //Nom Formulaire
    //$_REQUEST['']; //Correspond à GET + POST + $_COOKIE, il remplace plusieurs Super Globales

    echo $_SERVER['SERVER_NAME']."<br/>"; //Retourne le nom du serveur LOCALHOST
    echo $_SERVER['PHP_SELF']."<br/>"; //Retourne le nom du fichier avec le chemin

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