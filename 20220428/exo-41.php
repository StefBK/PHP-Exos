<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 41</title>
        <link rel="stylesheet" href="css/main39.css" />
    </head>
    <body>
        <h1>Livre d'Or</h1>
        <?php
        // Ouvre un fichier en lecture seule
        $fichier=fopen("livre.txt","r");
        // Crée un fichier et positionne le pointeur en début de ligne
        // $fichier=fopen('livre.txt',"x");

        // On parcourt tout le fichier tant qu'on n'a pas atteint la fin du fichier
        // feof = Find End Of File
            while(!feof($fichier)){
                // Méthode FGETS pour lire chaque ligne du fichier
                echo fgets($fichier)."<br/>";
                //=>Toto
                //Tutu
                //Tata
                //Titi
            }
        // Toujours fermer une instance ouverte
        fclose($fichier);

        // Afficher le fichier en tout ou rien (faire un echo sans faire de WHILE) sans passer par un WHILE
        //Affiche des données à la suite
        $fichier=fopen("livre.txt","r");
            echo fread($fichier,100);
        fclose($fichier);

        //Affiche tout le fichier
        $fichier=fopen("livre.txt","r");
            echo fpassthru($fichier);
        fclose($fichier);

        ?>
    </body>
</html>