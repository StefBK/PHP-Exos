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
            echo session_id();
            echo $_SESSION['prenom'];
            echo $_SESSION['nom'];
            echo"<a href='exo-49.php'>RETOUR</a>";
            
        ?>
    </body>
</html>