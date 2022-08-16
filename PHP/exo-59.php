<?php

?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Compatibilité avec EDGE-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--Compatibilité avec IPHONE-->
        <title>Exercice 59</title>
        <link rel="stylesheet" href="css/main59.css" />
    </head>
    <body>
        <h1>UTILISATION DES REGEX</h1>
        <!-- Les Expressions Régulières -->
        <?php
        //La Fonction preg_match retourne 1 si elle trouve directement une chaîne correspondante
        $str="CCI DWWM";
        //Création d'une variable Commutateur
        //i = "Ne pas prendre en compte la casse". 
        //Le "/" est un délimiteur pour définir la STR à rechercher
        $pattern="/dwwm/i";
        // Aller chercher cette information
        echo preg_match($pattern,$str);
        //=>Retourne 1

        //La Fonction preg_match_all trouve toutes les correspondance. Elle retourne le nombre d'occurences de cette STR
        $str="Ah que coucou les geeks";
        $pattern="/ou/i";
        echo preg_match_all($pattern,$str);
        //=>Retourne 2

        //La Fonction preg_replace remplace toutes les correspondances. 
        $str="Ah que coucou les geeks";
        $pattern="/ou/i";
        echo preg_replace($pattern,"qua",$str);
        //=>Retourne "Ah que cquacqua les geeks"

        //Regex
        // On ouvre et on ferme avec : #^$#
        // Entre crochets on autorise tous ces caractères avec + pour qu'il y en ait au moins  : #^[a-z0-9._-]+$#
        // Avec le @ : #^[a-z0-9._-]+@$#
        //#^[a-z0-9._-]+@[a-z0-9._-]{2,}$# : Le 2 = 2 fois ou plus
        //#^[a-z0-9._-]+@[a-z0-9._-]\.[a-z]{2,3}$# : Dans l'accolade : minimum 2 et maximum 3


        if (isset($_POST['mail']))
        {
            $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
            {
                echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
            }
            else
            {
                echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
            }
        }
        //i : la regex sera insensible à la casse, par exemple : /abc/i, ce qui nous donne « abc » ou « ABC »
        //s : le métacaractère « . » fonctionnera aussi pour les retours à la ligne
        //U : mode « ungreedy », cette option permet de préciser que la regex s’arrête le plus tôt possible. Ainsi si on veut par exemple que la regex s’arrête à la première occurrence d’une balise.
        //Date au format jj/mm/aaaa ou jj-mm-aaaa	/([0-9]{2}[-\/]){2}[0-9]{4}/	09-05-1992
        //Adresse email	/[A-Za-z0-9-_\.]+@[a-zA-z0-9]+.[a-zA-Z]{2,3}/	test_61@gmail.com
        //Numéro de téléphone	/^0[1-9]([-. ]?[0-9]{2}){4}$/	02.33.33.54.85
        //URL	/http[s]?:\/\/[A-Za-z0-9\/~\.]*/	http://www.ensicaen.fr/~test/image.png
        //Balise img	/<img(.)*\/>/	<img src=’http://www.google.fr’ alt=’ ‘ />
        //En REGEX pour faire les 2 slashes d'une URL NEC caractère d'échappement => "/\/\"
        ?>

        <form method="post">
            <p>
                <label for="mail">Votre mail ?</label> <input id="mail" name="mail" /><br />
                <input type="submit" value="Vérifier le mail" />
            </p>
        </form>

        <?php
            //Fonctions de filtres qui existent déjà en PHP sans avoir besoin du REGEX : https://www.php.net/manual/fr/filter.filters.validate.php
            //Ex : filter_char($email,FILTER_VALIDATE_EMAIL)

            //https://www.w3schools.com/php/filter_validate_email.asp
            $email = "john.doe@example.com";
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("$email is a valid email address");
            } else {
            echo("$email is not a valid email address");

            //Mais même 1 caractère fonctionne si @ donc sans REGEX et avec FILTER VALIDATE, pour optimiser, prévoir de faire valider le mail par l'utilisateur en lui envoyant un lien de validation à cliquer à réception du mail
            }
        ?>
    </body>
</html>
