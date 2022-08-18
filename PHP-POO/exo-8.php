<?php
//CONSIGNES :
//En OBJET
//FORM avec liste déroulante, 3 articles avec prix concaténé au value de la liste déroulante avec 2 Attributs (avec un écho en php de $champ1.$champ2)
//Renseigner champ QUANTITÉ
//Bouton VALIDER
//Affichage du prix total "Le montant de votre panier est de X€"

include_once('class/legumes.class.php');
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <title>PHP POO</title>
    <link rel="stylesheet" href="css/exo-8.css" />
</head>
<body>
    <h1>PROJET LÉGUMES</h1>
        <section class="part1">
            <?php
                //Déclaration de variables pour les instanciers à la Classe Legumes :
                $Carottes=new Legumes;
                $Navets=new Legumes;
                $Poireaux=new Legumes;

                //Initialisation des variables Objets :
                $Carottes->setNom('Carottes');
                $Navets->setNom('Navets');
                $Poireaux->setNom('Poireaux');
                //Idem pour le prix :
                $Carottes->setPrix(1);
                $Navets->setPrix(2);
                $Poireaux->setPrix(3);
            ?>

            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <select name="legumes" size="1">
                    <option value="<?php echo $Carottes->getNom();?>">
                        <?php echo $Carottes->getNom();?> : <?php echo $Carottes->getPrix();?>€
                    </option>
                    <option value="<?php echo $Navets->getNom();?>">
                        <?php echo $Navets->getNom();?> : <?php echo $Navets->getPrix();?>€
                    </option>
                    <option value="<?php echo $Poireaux->getNom();?>">
                        <?php echo $Poireaux->getNom();?> : <?php echo $Poireaux->getPrix();?>€
                    </option>
                </select>
                <br/>
                <input class="val" type="number" name="quantite" placeholder="Saisir la quantité..." maxlength="10" required />
                <br/>
                <input class="ope" type="submit" value="ENVOYER" name="envoyer" />
            </form>
        </section>
        <section class="part2">
            <?php
                if(isset($_POST['envoyer'])){
                    $liste=$_POST['legumes'];
                    $qte=$_POST['quantite'];

                    // echo $liste.' : '.$qte;

                    $$liste->setQte($qte);

                    echo "Le montant de votre panier s'élève à : ".$$liste->calculer()."€";
                }
            ?>
        </section>    
</body>
</html>