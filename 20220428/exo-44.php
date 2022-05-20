<?php

?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 44</title>
        <link rel="stylesheet" href="css/main42.css" />
    </head>
    <body>
        <h1>Gestion des Cookies</h1>
        <?php
        // Un cookie récupère grâce à des variables d'environnement les habitudes de navigation, le SE, etc. et le nb de visites. Le cookie a une durée de vie. Souvent sur 1 an.

        // Création du Cookie
        setcookie('Prénom','Dédé');
        // Plusieurs paramètres possibles pour le Cookie (nom, durée de vie)
        // Le Cookie sera détruit dès la fin de sa durée de vie

        // Cookies valables 24h (86400 secondes)
        setcookie('Prénom','Dédé',time()+86400);

        // Il existe des Cookies Tiers ou Mouchards (Ghostery pour y remédier) de sites tiers outre ceux du site

        ?>
    </body>
</html>