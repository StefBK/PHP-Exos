<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>

        <!-- Faire un formulaire -->
        <section>
            <form action="exo-10.php" method="POST" enctype="multipart/form-data">
                <label>Chaîne de Caractères</label>
                <input type="text" name="chaine" placeholder="Saisir votre texte" maxlength="25" required />
                <br/>
                <label>Caractère à Rechercher</label>
                <input type="text" name="trouver" maxlength="1" required />
                <br/>
                <label>Caractère à Remplacer</label>
                <input type="text" name="remplacer" maxlength="1" required />
                <br/>
                <input type="submit" value="Soumettre" name="envoyer" />
                <input type="reset" value="Effacer" name="annuler" />
            </form>
        </section>

        <?php
        if(isset($_POST['envoyer'])){
            $texte=$_POST['chaine'];
            // echo $texte;
            $compteur=0;
            // Compter le nombre de caractères avant traitement
            $nb_avant_traitement=strlen($texte);
            echo "Vous avez saisi ".$nb_avant_traitement." caractères<br/>";
            // Supprimer les chaînes vides en début et fin
            $texte=trim($texte);
            // Compter le nombre de caractères après traitement
            $nb_apres_traitement=strlen($texte);
            echo "Après traitement, il reste ".$nb_apres_traitement." caractères<br/>";

            // Récupérer chaque élément dans une cellule d’un tableau
            echo("<table>");
                while($compteur<$nb_apres_traitement){
                    echo("<tr><td>");
                    echo($texte[$compteur]);
                    echo("</td></tr>");
                    $compteur++;
                }
            echo("</table>");

            // Parcourir la STR
            $compteur=0;
            $nbcar=0;
            while($compteur<$nb_apres_traitement){
                if($caractere===$texte[$compteur]){
                    $newtexte[$compteur]=$newcaractere;
                    $nbcar++;
                }
                $compteur++;
            }
            if($nbcar!=0){
                echo("Vous avez dans votre chaîne de caractères : ".$nbcar." caractère(s) trouvé(s) !<br/>");
            }
            else{
                echo("Vous n'avez aucun caractère trouvé !");
            }

            // Compter le nombre de caractères à remplacer suivant son choix de caractère
            $caractere=$_POST['trouver'];
            // Récupérer le caractère de remplacement
            $newcaractere=$_POST['remplacer'];
            echo("<section>");
                $compteur=0;
                echo("<table>");
                while($compteur<$nb_apres_traitement){
                    echo("<tr><td>");
                        if($caractere===$texte[$compteur]){
                            $texte[$compteur]=$newcaractere;
                            echo($texte[$compteur]);
                        }
                        else{
                            echo($texte[$compteur]);
                        }
                    echo("</td></tr>");
                    $compteur++;
                }
                echo("</table>");
            echo("</section>");
        }
        ?>
    </body>
</html>