<!-- Utiliser un foreach même si tableau peut être séquentiel
Formulaire avec un champ
Dans ce champ, on saisit un caractère
Si on le tape en minuscule, le convertir en majuscule
Renvoyer l'information
Balayer chaque valeur de chaque Tableau
Si le caractère saisi correspond au 1er caractère de la valeur, ne pas l'afficher -->

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 22</title>
        <link rel="stylesheet" href="css/main13.css" />
    </head>
    <body>
        <section>
            <form action="exo-22.php" method="POST" >
                <label>Taper la 1ère lettre des départements à ignorer :</label>
                <input type="text" name="caractere" placeholder="Saisir une lettre" maxlength="1" required />
                <br/>
                <input type="submit" value="Traitement" name="soumettre" />
            </form>
            <?php
            
            $tableau[0]="Ain";
            $tableau[1]="Drôme";
            $tableau[2]="Ardèche";
            $tableau[3]="Isère";
            $tableau[4]="Savoie";

            if(isset($_POST['soumettre'])){
                $caractere=strtoupper($_POST['caractere']);
                foreach($tableau AS $indice=>$valeur){
                    if($tableau[$indice][0]==$caractere){
                        continue;
                    }
                    echo $valeur."<br/>";
                }
            }
            ?>
        </section>
    </body>
</html>