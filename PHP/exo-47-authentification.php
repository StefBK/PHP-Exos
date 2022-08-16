<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 47</title>
        <link rel="stylesheet" href="css/main47.css" />
    </head>
    <body>
        <section>
            <h1>Vous êtes correctement authentifié !</h1>
            <a href="#" onclick='history.back()'>Retour</a>
            <span>
                <?php
                    echo "<br/>".$_COOKIE['access'];
                ?>
            </span>
        </section>
    </body>
</html>
