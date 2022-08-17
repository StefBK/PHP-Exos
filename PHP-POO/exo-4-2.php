<?php

//CONSIGNES :
//Variante en mettant la classe dans un autre fichier

//Nom du fichier = <Nom de la classe (en minuscules)>.class.php 

include_once('class/data.class.php');
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>PHP POO</title>
    </head>
    <body>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <label>VALEUR</label>
                <input type="text" name="val" placeholder="Saisir votre texte" maxlength="10" required />
                <input type="submit" name="envoyer" value="ENVOYER" />
            </form>
            <?php
            if(isset($_POST['envoyer'])){
                $texte=$_POST['val'];
                $traitement=new Data;
                $traitement->setData($texte);
                echo "Valeur Saisie : ".$traitement->getData().'<br />';
            }
            ?>
        </section>
    </body>
</html>>
