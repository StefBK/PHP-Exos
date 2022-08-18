<?php

//CONSIGNES :
//En POO : Pour chaque traitement, faire une méthode
//Avec un fichier à part (traitement.class.php qui se trouve dans un dossier class) qui génère une classe (Traitement) et le fichier principal se nomme exo-6.php
//Saisir une STR dans un FORM avec un CHAMP de type TEXTE et un bouton TRAITEMENT
//Un bloc SECTION à 20% et un bloc SECTION à 80%
//Afficher ce qui a été saisi
//Retourner la longueur de la STR
//Retourner le caractère à la position de X (charAT)
//Retourner la position du caractère (indexOf)
//Retourner la position du caractère à partir d'une position (indexOf)
//Retourner une STR du texte (substring)
//Retourner un tableau (split)
//Retourner la STR en majuscules
//Retourner la STR en minuscules

include_once('class/traitement.class.php');
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>PHP POO</title>
        <link rel="stylesheet" href="css/exo-6.css" />
    </head>
    <body>
        <h1>TRAITEMENT D'UNE CHAÎNE DE CARACTÈRES</h1>
        <section class="part1">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <label>SAISIE</label>
                <input class="val" type="text" name="valeur" placeholder="Saisir une chaîne de caractères..." maxlength="50" required />
                <br/>
                <input class="ope" type="submit" value="ENVOYER" name="envoyer" />
            </form>
        </section>
        <section class="part2">
            <?php
                if(isset($_POST['envoyer'])){
                    $txt=new Traitement;
                    $txt->setChaine($_POST['valeur']);
                    echo $txt->getChaine();
                    echo '<br/>';
                    echo $txt->chartA(1);
                    echo '<br/>';
                    echo $txt->longueur();
                    echo '<br/>';
                    echo $txt->substring(0,2);
                    echo '<br/>';
                    echo $txt->upper();
                    echo '<br/>';
                    echo $txt->lower();
                    echo '<br/>';
                }
            ?>
        </section>
    </body>
</html>
