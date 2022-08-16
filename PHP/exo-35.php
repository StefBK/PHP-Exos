<?php
    $civilite="GEEK & DWWM";
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 35</title>
        <link rel="stylesheet" href="css/main31.css" />
    </head>
    <body>
        <h1>La Super Globale GET</h1>
        <div>
        <!-- require() => Si erreur de script, l'exécution s'arrête
        include() => Va voir l'erreur mais va quand même exécuter la page avec un message d'erreur (DÉCONSEILLÉ)
        require_once() => Idem à require mais exécute une seule fois si plusieurs require (DÉCONSEILLÉ pour gérer ses bugs)
        include_once() => Idem à include mais exécute une seule fois si plusieurs inclued (DÉCONSEILLÉ pour gérer ses bugs) -->
        <a href="Exo-35-1.php?civilite=<?= $civilite ?>">Exo 35-1</a>
        <!-- rawurlencode = Encode une chaîne de caractères non alphanumérique par des %X et %Y -->
        <a href="Exo-35-1.php?civilite=<?= rawurlencode($civilite) ?>">Exo 35-1</a>
        </div>
        
    </body>
</html>