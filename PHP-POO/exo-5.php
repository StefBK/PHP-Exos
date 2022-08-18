<?php

//CONSIGNES :
//Faire calculatrice
//Cadre 1 :
//Cadre 1-a : Valeur 1
//Cadre 1-b : 4 signes
//Cadre 1-c : Valeur 2
//Cadre 2 : Renvoyer le résultat dans case en dessous

include_once('class/calculatrice.class.php');
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>PHP POO</title>
        <link rel="stylesheet" href="css/exo-5.css" />
    </head>
    <body>
        <h1>CALCULATRICE</h1>
        <section class="part1">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <input class="val" type="number" name="a" placeholder="Valeur N°1" maxlength="10" required />
                <br/>
                <input class="ope" type="submit" value="+" name="addition" />
                <input class="ope" type="submit" value="-" name="soustraction" />
                <input class="ope" type="submit" value="*" name="multiplication" />
                <input class="ope" type="submit" value="/" name="division" />
                <br />
                <input class="val" type="number" name="b" placeholder="Valeur N°2" maxlength="10" required />
            </form>
        </section>
        <section class="part2">
            <?php
                //Si pas de REQUIRED sur les valeurs
                //if ((isset($_POST['addition']))||(isset($_POST['soustraction']))||isset($_POST['multiplication'])||isset($_POST['division'])){
                //Si pas de type NUMERIC
                //if (is_numeric($_POST['a']) || is_numeric($_POST['b'])){
                $total=new Calculatrice($_POST['a'],$_POST['b']);
                if(isset($_POST['addition'])){
                    echo $total->addition();

                }else if (isset($_POST['soustraction'])){
                    echo $total->soustraction();

                }else if (isset($_POST['multiplication'])){
                    echo $total->multiplication();

                }else if (isset($_POST['division'])){
                    echo $total->division();
                }
                //}else{
                    //echo 'Veuillez saisir des valeurs numériques';
                //}
                //}    
            ?>
        </section>
    </body>
</html>
