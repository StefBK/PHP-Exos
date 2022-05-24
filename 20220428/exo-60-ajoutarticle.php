<?php
    require_once('exo-60-myparam.inc.php');
    require_once('exo-60-bdd.php');
    $idcom=connexbase("magasin","exo-60-myparam");
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
            <h2>AJOUTER UN ARTICLE</h2>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <!-- 4 INPUT de type TEXT car 4 CHAMPS dans la TABLE Article de la BDD -->
                <label for="Id_Article">IDENTIFIANT</label>
                <input type="text" name="id" placeholder="ID ARTICLE" required/><br/>
                <label for="Designation">DÉSIGNATION</label>
                <input type="text" name="designation" placeholder="DÉSIGNATION" maxlength="20" required/><br/>
                <label for="Prix_Unitaire">PU</label>
                <input type="text" name="prix" placeholder="PRIX" maxlength="6" required/><br/>
                <label for="Categorie">CAT</label>
                <input type="text" name="categorie" placeholder="CATÉGORIE" maxlength="25" required/><br/>

                <input type="submit" value="ENVOYER" name="envoyer" />
                <input type="reset" value="ANNULER" name="annuler" />

                <!-- <input type="submit" value="ARTICLE" name="env_article" /> -->
                <!-- Pour que les boutons ne se touchent pas -->
                <!-- &nbsp;
                <input type="submit" value="AJOUTER" name="ajouter_article" /> -->
            </form>
            <button onClick="javascript:history.back()">RETOUR À LA PAGE D'AUTHENTIFICATION</button>
        </section>
        <section>
            <?php
                if(isset($_POST['envoyer'])){
                    // Permettra d'éviter de rentrer du code JS. Tout sera donc traité en PHP.
                    $id=htmlspecialchars($_POST['id']);
                    $designation=htmlspecialchars($_POST['designation']);
                    $prix=htmlspecialchars($_POST['prix']);
                    $categorie=htmlspecialchars($_POST['categorie']);


                    $rqt_ajoutarticle="INSERT INTO article VALUES('$id','$designation','$prix','$categorie')";
                    $resultat=$idcom->query($rqt_ajoutarticle);

                    // Destruction Objet Résultat
                    // $resultat->free();
                }
                // Fermeture de la connexion
                $idcom->close();
            ?>
        </section>
    </body>
</html>