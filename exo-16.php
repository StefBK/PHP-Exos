<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <!-- Lister les éléments d'un tableau à la suite en balayant le tableau -->
    <body>
        <?php
            // $couleur=array('bleu','vert','orange','rose');
            // $longueur=count($couleur);
            // $compteur=0;
            // echo("<table>");
            //     while($compteur<$longueur){
            //         echo("<tr><td>");
            //         echo($couleur[$compteur]);
            //         echo("</td></tr>");
            //         $compteur++;
            //     }
            // echo("</table>");
            // OU :
            $couleur=array('bleu','vert','orange','rose');
            // Utilisation de CONTINUE. Si condition est vraie, continuer le code jusqu'au bout.
            for($i=0;$i<count($couleur);$i++){
                if($couleur[$i]=='vert'){
                    continue;
                }
                echo($couleur[$i]."<br/>");
            }
            // =>Affiche tous les éléments sauf vert
            echo("<br/>");
            // Utilisation de BREAK. Sort de la boucle dès que l'égalité est atteinte.
            for($i=0;$i<count($couleur);$i++){
                if($couleur[$i]=='vert'){
                    break;
                }
                echo($couleur[$i]."<br/>");
            }
            // =>N'affiche que l'élément bleu

        ?>
       
    </body>
</html>