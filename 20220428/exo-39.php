<!-- Utiliser la variable $_SERVER['PHP_SELF'] qui renvoie vers la même page
action="<?php $_SERVER['PHP_SELF']?>" pour rendre la variable Super Globale
Formulaire 2 champs valeur1 et valeur2 + 1 bouton pour chaque opération
Résultat de votre addition/soustriction/multiplication/division -->

<?php

function addition($a,$b){
    return $a+$b;
}

function soustraction($a,$b){
    return $a-$b;
}

function multiplication($a,$b){
    return $a*$b;
}

function division($a,$b){
    return $a/$b;
}

?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 39</title>
        <link rel="stylesheet" href="css/main39.css" />
    </head>
    <body>
        <h1>Calculatrice</h1>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
                <label>Valeur N°1</label>
                <input class="val" type="number" name="a" placeholder="Saisir la première valeur" maxlength="10" required />
                <br/>
                <label>Valeur N°2</label>
                <input class="val" type="number" name="b" placeholder="Saisir la seconde valeur" maxlength="10" required />
                <br/>
                <input class="ope" type="submit" value="+" name="addition" />
                <input class="ope" type="submit" value="-" name="soustraction" />
                <input class="ope" type="submit" value="*" name="multiplication" />
                <input class="ope" type="submit" value="/" name="division" />
            </form>
            <?php
            if(isset($_POST['addition'])){
                $total=addition($_POST['a'],$_POST['b']);
                echo("Le résultat de votre addition est : ".$total."<br/>");
            }else if(isset($_POST['soustraction'])){
                $total=soustraction($_POST['a'],$_POST['b']);
                echo("Le résultat de votre soustraction est : ".$total."<br/>");
            }else if(isset($_POST['multiplication'])){
                $total=multiplication($_POST['a'],$_POST['b']);
                echo("Le résultat de votre multiplication est : ".$total."<br/>");
            }else if(isset($_POST['division'])){
                $total=division($_POST['a'],$_POST['b']);
                echo("Le résultat de votre division est : ".$total."<br/>");
            }

            ?>
        </section>
    </body>
</html>