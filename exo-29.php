<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 29</title>
        <link rel="stylesheet" href="css/main28.css" />
    </head>
    <body>
        <h1>Exercice sur l'affichage des mois</h1>
        <!-- Champ de formulaire de type number : Veuillez saisir le mois recherché. Chiffre saisi de 1 à 12. Au submit, retourner le mois qui correspond. Avec FOREACH, FOR, WHILE et DO WHILE -->
        <section>
            <form action="exo-29.php" method="POST" >
                <label>Indiquer le numéro correspondant au mois à afficher (1-12) :</label>
                <input type="number" name="month" placeholder="Saisir un nombre (1-12)" maxlength="2" min=1 max=12 required />
                <br/>
                <input type="submit" value="Soumettre" name="soumettre" />
            </form>
            <?php
                $mois=array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');

                if(isset($_POST['soumettre'])){
                    $nb=$_POST['month'];
                    $nb--;
                    
                    //Méthode 1
                    echo $mois[$nb]."<br/>";
                    //Fin Méthode 1

                    //Méthode 2 : Avec une boucle FOR
                    $longueur=count($mois);
                    for($i=0;$i<=$longueur;$i++){
                        if($i==$nb){
                            echo $mois[$nb]."<br/>";
                        }
                    }
                    //Fin du FOR

                    //Méthode 3 : Avec une boucle WHILE
                    $i=0;
                    while($i<$longueur){
                        if($i==$nb){
                            echo $mois[$nb]."<br/>";
                        }
                        $i++;
                    }
                    //Fin du WHILE

                    //Avec une boucle DO WHILE
                    $i=0;
                    do{
                        if($i==$nb){
                            echo $mois[$nb]."<br/>";
                        }
                        $i++;
                    }while($i<$longueur);
                    //Fin du DO WHILE

                    //Méthode 4 : Avec une boucle FOREACH
                    foreach($mois AS $indice=>$valeur){
                        if($indice==$nb){
                            echo $indice."=>".$valeur."<br/>";
                        }
                    }
                    //Fin du FOR EACH

                }

            ?>
        </section>
    </body>
</html>