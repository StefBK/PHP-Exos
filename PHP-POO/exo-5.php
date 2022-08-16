<?php

//CONSIGNES :
//Faire calculatrice
//Cadre 1 :
//Cadre 1-a : Valeur 1
//Cadre 1-b : 4 signes
//Cadre 1-c : Valeur 2
//Cadre 2 : Renvoyer le résultat dans case en dessous

include_once('calculatrice.class.php');
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>PHP POO</title>
        <link rel="stylesheet" href="exo-5.css" />
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
                if(isset($_POST['addition'])){
                    $value1=$_POST['a'];
                    $value2=$_POST['b'];
                    
                    $total=new Calculatrice;
                    echo $total->addition($value1,$value2);

                }else if (isset($_POST['soustraction'])){
                    $value1=$_POST['a'];
                    $value2=$_POST['b'];
                    
                    $total=new Calculatrice;
                    echo $total->soustraction($value1,$value2);

                }else if (isset($_POST['multiplication'])){
                    $value1=$_POST['a'];
                    $value2=$_POST['b'];
                    
                    $total=new Calculatrice;
                    echo $total->multiplication($value1,$value2);

                }else if (isset($_POST['division'])){
                    $value1=$_POST['a'];
                    $value2=$_POST['b'];
                    
                    $total=new Calculatrice;
                    echo $total->division($value1,$value2);
                }    
            ?>
        </section>
    </body>
</html>
