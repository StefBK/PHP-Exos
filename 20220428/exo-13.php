<!-- Définir le nombre de compétences à rajouter au cv
Soumettre
Affichage d'autant de champs que le nombre
Soumettre
Affichage d'un tableau rempli avec les compétences saisies -->
<!-- + Affichage du nombre de compétences :
1°) Fonction
Pour les champs créés dans la boucle, passer par une variable déclarée en type global pour qu'elle soit utilisable à l'extérieur de la fonction puis concaténer avec le compteur nb de champs le nom du champ.
ou
2°) total[]=x+1; avec implode, explode et/ou split pour mettre les éléments dans un tableau 
Indice : Les champs d'un formulaire sont des éléments de tableau. Chaque formulaire est identifié de manière séquentielle-->


<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main13.css" />
    </head>
    <body>
        <!-- Saisie du nombre de compétences -->
        <section>
            <form action="exo-13.php" method="POST" enctype="multipart/form-data">
                <label>Combien de compétences souhaitez-vous rajouter à votre CV ?</label>
                <input type="text" name="choix" placeholder="Saisir un nombre entier" maxlength="2" required />
                <br/>
                <input type="submit" value="Soumettre" name="envoyer" />
            </form>
        </section>
        <!-- Récupération du nombre de compétences -->
        <section>
            <form action="exo-13.php" method="POST" enctype="multipart/form-data">
                <?php
                    if(isset($_POST['envoyer'])){
                        $nb=$_POST['choix'];
                        for($i=1;$i<=$nb;$i++){
                            echo("<input type='text' name='choix[]' placeholder='Saisir une compétence' maxlength='25' required /><br/>");
                        }
                    }
                ?>
                <input type="submit" value="Soumettre" name="soumettre" />
            </form>
        </section>
        <section>
            <table>
                <?php
                    // Méthode 1 : Avec FOR
                    if(isset($_POST['soumettre'])){
                        // print_r affiche un tableau avec les clefs/valeurs
                        // print_r($_POST['choix']);
                        $nb=count($_POST['choix']);
                        for($i=0;$i<$nb;$i++){
                            echo ("<tr><td>".$_POST['choix'][$i]."</td></td>");
                        }
                    }
                ?>
            </table>
        </section>
        <section>
            <table>
                <?php
                    // Méthode 2 : Avec FOR EACH
                    if(isset($_POST['soumettre'])){
                    // $POST est un TABLEAU, AS pointe vers la CLEF (INDEX) à laquelle on associe la VALEUR
                        foreach($_POST['choix'] AS $indice=>$valeur){
                            // Tableau à 2 colonnes, 1 pour la clef, 1 pour la valeur
                            echo("<tr><td>".$indice."</td><td>".$valeur."</td></tr>");
                        }
                    }
                ?>
            </table>
        </section>
        <section>
            <table>
                <?php
                    // Méthode 3 : Avec WHILE
                    if(isset($_POST['soumettre'])){
                        $nb=count($_POST['choix']);
                        $i=0;
                        while($i<$nb){
                            echo ("<tr><td>".$_POST['choix'][$i]."</td></td>");
                            $i++;
                        }
                    }
                ?>
            </table>
        </section>
        <section>
            <table>
                <?php
                    // Méthode 4 : Avec DO WHILE
                    if(isset($_POST['soumettre'])){
                        $nb=count($_POST['choix']);
                        $i=0;
                        do{
                            echo ("<tr><td>".$_POST['choix'][$i]."</td></td>");
                            $i++;
                        }while($i<$nb);
                    }
                ?>
            </table>
        </section>
    </body>
</html>