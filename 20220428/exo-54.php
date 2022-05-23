<?php
    function proteger($email){
        $adresse_mail="";
        // substr extrait une STR par rapport à une STR de début + méthode ORD qui renvoie un format unicode compris entre 1 et 255
        for($i=0;$i<strlen($email);$i++){
            $adresse_mail.="#&".ord(substr($email,$i,1)).";";
            //=>2 SALT entre guillemets
            return $adresse_mail;
        }
    }
    // $code="";
    // $code=substr("stefstef@gmail.com",2,5);
    //=>efstef (Affiche 5 caractères après les 2 premiers)
    //echo $code;
    //$code=ord($code);
    //echo $code;
    //=>101 (codage du résultat avec SUBSTR)
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 54</title>
        <link rel="stylesheet" href="css/main53.css" />
    </head>
    <body>
        <!-- Éviter le spam d'adresses mail donc la chiffrer pour qu'elle ne soit pas reconnue en clair' 
        Protection de l'adresse mail-->
        <h1>EMAIL - PROTECTION</h1>
        <section>

        </section>
        <section>
            <?php
                echo "<a href='".proteger("mailto:stefstef@gmail.com")."'>NOUS CONTACTER</a>";
                //Dans le Code Source, le lien <a> ne sera pas en clair
            ?>            
        </section>
    </body>
</html>
