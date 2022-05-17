<!-- Faire idem à l'exercice 39 avec un SELECT CASE en donnant le même NAME au SUBMIT -->

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
        <title>Exercice 40</title>
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
                <input class="ope" type="submit" value="+" name="calcul" />
                <input class="ope" type="submit" value="-" name="calcul" />
                <input class="ope" type="submit" value="*" name="calcul" />
                <input class="ope" type="submit" value="/" name="calcul" />
            </form>
            <?php

            // Les 2 premiers ISSET ne servent à rien car on a mis REQUIRED pour qu'une valeur soit saisie. De la même manière, IS_NUMERIC n'est pas utile car les champs concernés sont de type NUMBER
            if((isset($_POST['a']))&&(isset($_POST['b']))&&(isset($_POST['calcul']))){
                switch($_POST['calcul']){
                    case ("+"):
                        $total=addition($_POST['a'],$_POST['b']);
                        echo("Le résultat de votre addition est : ".$total."<br/>");
                        break;
                    case ("-"):
                        $total=soustraction($_POST['a'],$_POST['b']);
                        echo("Le résultat de votre soustraction est : ".$total."<br/>");
                        break;
                    case ("*"):
                        $total=multiplication($_POST['a'],$_POST['b']);
                        echo("Le résultat de votre multiplication est : ".$total."<br/>");
                        break;
                    case ("/"):
                        $total=division($_POST['a'],$_POST['b']);
                        echo("Le résultat de votre division est : ".$total."<br/>");
                        break;
                    // Le cas default ne sert à rien ici car boutons à cliquer. Pas de BREAK pour le DEFAULT.
                    default:
                        echo("Calcul Impossible !");
                    }

            }

            ?>
        </section>
    </body>
</html>