<?php
//1er Cookie expirant à la fin de la session
$ok1=setcookie('Prénom','Panoramix');

//2e Cookie expirant dans 30 jours
$ok2=setcookie('Nom','Assurancetourix',time()+(30*24*3600));

if($ok1 AND $ok2){
    $message="Cookies déposés normalement !";
}else{
    $message="L'un des Cookies n'est pas déposé !";
}
// Voir Inspecteur - Stockahe - Cookies - Expiration
?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 45</title>
        <link rel="stylesheet" href="css/main42.css" />
    </head>
    <body>
        <h1>Gestion des Cookies</h1>
        <div>
            <?php
                echo $message."<br/>";
            ?>
            <a href="exo-45-1.php">Page 2</a>
        </div>
    </body>
</html>