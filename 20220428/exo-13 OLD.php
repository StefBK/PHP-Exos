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
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <form action="">
            <div>
                <!-- Saisie du nombre de compétences -->
                <section>
                    <form action="exo-13.php" method="POST" enctype="multipart/form-data">
                        <label>Combien de compétences souhaitez-vous rajouter à votre CV ?</label>
                        <input type="text" name="nb" placeholder="Saisir un nombre entier" maxlength="2" required />
                        <br/>
                        <input type="submit" value="Soumettre1" name="envoyer1" />
                        <input type="reset" value="Effacer1" name="annuler1" />
                    </form>
                </section>
                <!-- Récupération du nombre de compétences -->
                <section>
                    <?php
                        if(isset($_POST['envoyer1'])){
                            $nb=$_POST['nb'];
                            // Création d'autant de champs "Compétence" que demandé
                            for ($compteur=1;$compteur<=$nb;$compteur++):
                    ?>
                    <form action="exo-13.php" method="POST" enctype="multipart/form-data">
                        <label>Compétences</label>
                        <?php
                        echo("<input type='text' name='competence'").$compteur; echo("placeholder='Compétence N°'").$compteur; echo("maxlength='25' required /><br/>");
                        ?>
                        <?php endfor ?>
                        <input type="submit" value="Soumettre2" name="envoyer2" />
                        <input type="reset" value="Effacer2" name="annuler2" />
                    </form>
                    <?php } ?>
                </section>
                <!-- Affichage des commpétences saisies -->
                <section>
                    <!-- <?php
                        if(isset($_POST))
                    ?> -->
                </section>
            </div>
        </form>
    </body>
</html>