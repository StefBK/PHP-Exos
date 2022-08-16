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

            <button onClick="javascript:history.back()">RETOUR À LA PAGE D'AUTHENTIFICATION</button>
        </section>
        <section>
            <?php
                //Recharge de la page PHP de recherche pour relire le code si aucune ID n'a été saisie
                if(!isset($_POST['id'])){
                    header('Location:exo-60-rechercheclient.php');
                    exit();
                }

                //Récupération de la variable id du client
                $id=htmlspecialchars($_POST['id']);

                // Création de la requête pour récupérer les données du client suite à la requête
                //2 notations possibles, notamment en concaténant sur plusieurs lignes utils si longues requêtes
                // $rqt_search="SELECT * FROM client";
                // $rqt_search.="WHERE Id_Client='$id'";
                $rqt_search="SELECT * FROM client WHERE Id_Client='$id'";

                $resultat=$idcom->query($rqt_search);

                // print_r($resultat);

                $data=$resultat->fetch_row();

            ?>

                <!-- Création du formulaire pour afficher les données du client  -->
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                    <label for="Id_Client">IDENTIFIANT</label>
                    <input type="text" name="id" placeholder="ID ARTICLE" value="<?php echo $data[0] ?>" required/><br/>
                    <label for="Nom">NOM</label>
                    <input type="text" name="nom" placeholder="NOM" maxlength="20" value="<?php echo $data[1] ?>" required/><br/>
                    <label for="Prenom">PRÉNOM</label>
                    <input type="text" name="prenom" placeholder="PRÉNOM" maxlength="20" value="<?php echo $data[2] ?>" required/><br/>
                    <label for="Adresse">ADRESSE</label>
                    <input type="text" name="adresse" placeholder="ADRESSE" maxlength="100" value="<?php echo $data[3] ?>" required/><br/>
                    <label for="Ville">VILLE</label>
                    <input type="text" name="ville" placeholder="VILLE" maxlength="25" value="<?php echo $data[4] ?>" required/><br/>
                    <label for="Age">ÂGE</label>
                    <input type="text" name="age" placeholder="ÂGE" maxlength="2" value="<?php echo $data[5] ?>" required/><br/>
                    <label for="Mail">MAIL</label>
                    <input type="text" name="mail" placeholder="MAIL" maxlength="25" value="<?php echo $data[6] ?>" required/><br/>

                    <input type="hidden" name="code" value="<?php echo $data[0] ?>"/><br/>

                    <input type="submit" value="MISE À JOUR" name="update" />
                    <input type="reset" value="ANNULER" name="annuler" />
                </form>
            <?php
                if(isset($_POST['update'])){
                    //Récupération des informations du formulaire mis à jour
                    $id=htmlspecialchars($_POST['id']);
                    $nom=htmlspecialchars($_POST['nom']);
                    $prenom=htmlspecialchars($_POST['prenom']);
                    $adresse=htmlspecialchars($_POST['adresse']);
                    $ville=htmlspecialchars($_POST['ville']);
                    $age=htmlspecialchars($_POST['age']);
                    $mail=htmlspecialchars($_POST['mail']);

                    //Mise à jour des données de la table client
                    $code=$_POST['code'];

                    $rqt_update="UPDATE client SET Id_Client='$id',Nom='$nom',Prenom='$prenom',Adresse='$adresse',Ville='$ville',Age='$age',Mail='$mail' WHERE Id_Client='$code'"; 

                    $resultat=$idcom->query($rqt_update);

                    //Recharge de la page pour initialiser les champs à rien
                    header('Location:exo-60-traitement.php');
                }

                // Destruction Objet Résultat inutile, pas une obligation
                $resultat->free();

                // // Fermeture de la connexion
                $idcom->close();
            ?>
        </section>
    </body>
</html>