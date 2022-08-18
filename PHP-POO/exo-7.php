<?php

//CONSIGNES:
//Calculer le montant TTC
//Montant TTC = HT *(1+TVA)
//On veut un FORM où entrer le montant HT
//Affichage HT
//Affichage TVA
//Affichage TTC
//Fichier montantttc.class.php
//Classe : MontantTtc dans un dossier class

include_once('class/montantttc.class.php');
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <title>PHP POO</title>
    <link rel="stylesheet" href="css/exo-7.css" />
</head>
<body>
    <h1>TVA & TTC</h1>
        <section class="part1">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <input class="val" type="number" name="valeur" placeholder="Montant HT" maxlength="10" required />
                <br/>
                <input class="ope" type="submit" value="ENVOYER" name="envoyer" />
            </form>
        </section>
        <section class="part2">
            <?php
                if(isset($_POST['envoyer'])){
                    $ht=new MontantTtc;
                    $ht->setHt($_POST['valeur']);
                    echo "Montant HT : ".$ht->getHt()." €<br/>";
                    echo "TVA : ".$ht->setMtva()." €<br/>";
                    echo "Montant TTC : ".$ht->setTtc()." €<br/>";
                }
            ?>
        </section>    
</body>
</html>