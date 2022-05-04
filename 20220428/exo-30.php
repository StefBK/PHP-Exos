<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 30</title>
        <link rel="stylesheet" href="css/main28.css" />
    </head>
    <body>
        <h1>Exercice sur l'affichage des mois</h1>
        <!-- Champ de formulaire de type number : Veuillez saisir le mois recherché. Chiffre saisi de 1 à 12. Au submit, retourner le mois qui correspond. Avec FOREACH, FOR, WHILE et DO WHILE -->
        <section>
            <form action="exo-30.php" method="POST" >
                <label>Sélectionnez votre mois d'anniversaire :</label>
                <select size="1" name="mois">
                    <option value=0>JAN</option>
                    <option value=1>FEV</option>
                    <option value=2>MAR</option>
                    <option value=3>AVR</option>
                    <option value=4>MAI</option>
                    <option value=5>JUI</option>
                    <option value=6>JUL</option>
                    <option value=7>AOU</option>
                    <option value=8>SEP</option>
                    <option value=9>OCT</option>
                    <option value=10>NOV</option>
                    <option value=11>DEC</option>
                </select>
                <input type="submit" value="Soumettre" name="soumettre" />
            </form>
            <?php
            if(isset($_POST['soumettre'])){
                $recuperation=$_POST['mois'];
                $mois=array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
                echo $mois[$recuperation];
            }
            ?>
        </section>

        <?php

        ?>
    </body>
</html>