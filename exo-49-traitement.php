<?php
    // Démarrage du service session par défaut
    session_start();
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 49</title>
        <!-- <link rel="stylesheet" href="css/main48.css" /> -->
    </head>
    <body>
        <?php
            // Traitement : Supprimer les espaces en début et fin de chaîne et sécuriser le code sinon possible d'injecter du script en convertissant les signes < et >
            // echo htmlspecialchars($_POST['prenom'])."<br/>";
            // echo htmlspecialchars($_POST['nom'])."<br/>";
            // htmlspecialchars idem à htlmentities qui est plus récente
            // echo htmlentities($_POST['prenom'])."<br/>";
            // echo htmlentities($_POST['nom'])."<br/>";
            $prenom=htmlentities(trim($_POST['prenom']));
            $nom=htmlentities(trim($_POST['nom']));

            // Pour chaque session_start il y a un numéro de session (id) qui sera attaché à chaque page
            // echo session_id();
            $id=session_id();
            // echo $prenom."<br/>";
            // echo $nom."<br/>";
            // echo $id."<br/>";

            $_SESSION['prenom']=$_POST['prenom'];
            $_SESSION['nom']=$_POST['nom'];

            echo"<a href='exo-49-affichage.php'>AFFICHAGE</a>";
        ?>
    </body>
</html>