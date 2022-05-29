<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 22</title>
        <!-- <link rel="stylesheet" href="css/main.css" /> -->
    </head>
    <body>

        <!-- Champ
        Vérifier que sa valeur est bien numérique 
        Si oui, formater avec printf en base 10 (%f)
        Puis BOUTON base10=>base2 -->

        <section>
            <form action="exo-24.php" method="POST" >
                <label>Nombre en base 10 :</label>
                <input type="number" name="nb" placeholder="Saisir un nombre" maxlength="10" required />
                <br/>
                <input type="submit" value="Traitement" name="soumettre" />
            </form>
            <?php
                if(isset($_POST['soumettre'])){
                    if(is_numeric($_POST['nb'])){
                        $base2=$_POST['nb'];
                        printf("%b",$base2);
                    }else{
                        echo("Veuillez saisir un nombre en base 10");
                    }
                }
            ?>
        </section>
    </body>
</html>