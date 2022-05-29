<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 31</title>
        <link rel="stylesheet" href="css/main31.css" />
    </head>
    <body>
        <h1>Exercice sur l'encadrement de 2 champs</h1>
        <!-- Formulaire avec 2 Champs
        Le 1er = "Valeur de Départ"
        Le 2e = "Valeur de Fin"
        Affichage autant de bloc que l'encadrement :
        Ex : Valeur de Début = 5 - Valeur de Fin = 7 - Affichage 3 blocs : 5, 6 et 7. -->
        
        <section>
            <form action="exo-31.php" method="POST" >
                <label>Valeur de Début</label>
                <input type="number" name="debut" placeholder="Saisir la valeur de début" maxlength="3" required />
                <br/>
                <label>Valeur de Fin</label>
                <input type="number" name="fin" placeholder="Saisir la valeur de fin" maxlength="3" required />
                <br/>
                <input type="submit" value="GO !" name="soumettre" />
            </form>
            <?php
            if(isset($_POST['soumettre'])){
                $vdebut=$_POST['debut'];
                $vfin=$_POST['fin'];
                $encadrement=$vfin-$vdebut;
                echo("<table>");
                    echo("<tr>");
                        for($i=1;$i<=$encadrement+1;$i++){
                            echo("<td>");
                            echo $vdebut;
                            $vdebut++;
                            echo("</td>");            
                        }
                        echo("</tr>");
                echo("</table>");
                }
            ?>
        </section>
    </body>
</html>