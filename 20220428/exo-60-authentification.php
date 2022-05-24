<?php
    require_once('exo-60-myparam.inc.php');
    require_once('exo-60-bdd.php');
    $idcom=connexbase("magasin","exo-60-myparam");
    if(isset($_POST['ajouter_article'])){
        header('Location:exo-60-ajoutarticle.php');
        exit();
    }
    if(isset($_POST['recherche_client'])){
        header('Location:exo-60-rechercheclient.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 60</title>
        <link rel="stylesheet" href="css/main60-anx.css" />
    </head>
    <body>
        <section>
            <!-- <h1>Vous êtes correctement authentifié !</h1> -->
            <!-- <a href="#" onclick='history.back()'>Retour</a> -->
            <!-- <button onClick="javascript:history.back()">RETOUR À LA PAGE D'AUTHENTIFICATION</button> -->
            <h2>AUTHENTIFICATION</h2>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <input type="submit" value="ARTICLE" name="env_article" />
                <!-- Pour que les boutons ne se touchent pas -->
                &nbsp;
                <input type="submit" value="AJOUTER" name="ajouter_article" />
                &nbsp;
                <input type="submit" value="RECHERCHER" name="recherche_client" />
            </form>
        </section>
        <section>
            <?php
                if(isset($_POST['env_article'])){
                    // Affectation d'une requête dans une variable
                    $rqt_article="SELECT * FROM article";
                    // Variable résultat se connecte et exécute la requête et récupère tout sous forme de tableau
                    $resultat=$idcom->query($rqt_article);
                    if(!$resultat){
                        echo "Lecture Impossible de la Table Article !";
                    }
                    // else{
                    //     print_r($resultat);
                        //=>mysqli_result Object ( [current_field] => 0 [field_count] => 4 [lengths] => [num_rows] => 1 [type] => 0 )
                    // }
                    
                    // fetch_array(MYSQLI_NUM) va balayer les lignes du tableau - MYSQLI_NUM renvoie le nombre de lignes
                    while($ligne=$resultat->fetch_array(MYSQLI_NUM)){
                        // FOREACH va balayer les colonnes sans avoir à compter le nombre de colonnes
                        foreach($ligne AS $valeur){
                            echo $valeur,"&nbsp";
                        }
                        echo "<hr/>";
                    }
                    // On a créé l'instance d'un objet. On doit donc le détruire pour libérer l'espace mémoire pris (FREE).
                    $resultat->free();
                }
                // Fermeture de la connexion à la BDD
                $idcom->close();
            ?>
        </section>
    </body>
</html>