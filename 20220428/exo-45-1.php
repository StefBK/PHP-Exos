<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 45 - Page 2</title>
        <link rel="stylesheet" href="css/main42.css" />
    </head>
    <body>
        <h1>Gestion des Cookies</h1>
        <div>
            <?php
                if(isset($_COOKIE['Prénom'])){
                    echo $_COOKIE['Prénom']."<br/>";
                }
                if(isset($_COOKIE['Nom'])){
                    echo $_COOKIE['Nom']."<br/>";
                }
            ?>
        </div>
    </body>
</html>