<?php
?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 43</title>
        <link rel="stylesheet" href="css/main42.css" />
    </head>
    <body>
        <h1>Quelques Opérations de Base sur les Fichiers</h1>
        <?php
        $fichier=file_exists('./fichier/geek.txt');

        // Si le fichier n'existe pas, alors on le crée
        //  Variable Booléenne file-exists

        // if($fichier){
        //     echo 'Le fichier existe déjà ! <br/>';
        // }else{
        //     $fichier=fopen("./fichier/geek.txt","a+");
        //     echo 'Fichier créé avec succès ! <br/>';
        // }
        // Écrire dans un fichier
        // $fichier=fopen("./fichier/geek.txt","a+");
        // Si r+ tronque et n'écrit pas à la suite
        // Si a+ écrit à la suite

        // echo '<br/>';
        // echo(str_repeat('~',50));
        // echo '<br/>';

        // fwrite($fichier,str_repeat('~',50)."\n");
        // fwrite($fichier,"Stef BK\n");
        // fwrite($fichier,str_repeat('~',50)."\n");

        // Fermer l'instance du fichier
        // fclose($fichier);

        //Méthode 1 : Afficher le Fichier Texte
        // $fichier=fopen("./fichier/geek.txt","r");
        // $texte=fread($fichier,filesize('./fichier/geek.txt'));
        // fclose($fichier);
        // echo $texte;

        //Méthode 2 : Afficher le Fichier Texte
        // $fichier=fopen("./fichier/geek.txt","r");
        // $texte=fpassthru($fichier);
        // echo $texte;
        // fclose($fichier);

        //Méthode 3 : Afficher le Fichier Texte
        // $fichier=fopen("./fichier/geek.txt","r");
        // $texte=file_get_contents('./fichier/geek.txt');
        // echo $texte;
        // fclose($fichier);

        //Méthode 4 : Afficher le Fichier Texte
        // $fichier=fopen("./fichier/geek.txt","r");
        // $texte=readfile('./fichier/geek.txt');
        // echo $texte;
        // fclose($fichier);
        
        echo("<h2>Affichage des Répertoires</h2>");
        // Ouvrir le Répertoire
        // $dir=opendir('./fichier');
        // echo $dir;
        // =>"Resource id #3."

        // Lire le contenu de $dir avec WHILE et READDIR
        // while($fichier=readdir($dir)){
        //     echo $fichier,'<br/>';
        // }

        // Fermer l'instance de Fichier
        // closedir($dir);

        //Lire le contenu d"un dossier avec SCANDIR et FOREACH
        $fichier=scandir('./fichier');
        // Parcourir le résultat
        foreach($fichier as $fichier){
            echo $fichier."<br/>";
        }
        closedir($dir);

        ?>
    </body>
</html>