<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 25</title>
        <link rel="stylesheet" href="css/main25.css" />
    </head>
    <body>
        <section>
            <h1>Vous avez effectué trop de tentatives (<?php echo $_SESSION['compteur'] ?>)<br/>Vous n'êtes pas autorisé à accéder à cette page !</h1>
            <a href="#" onclick='history.back()'>Retour</a>
        </section>
    </body>
</html>