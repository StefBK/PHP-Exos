<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 53</title>
        <link rel="stylesheet" href="css/main53.css" />
    </head>
    <body>
        <!--  -->
        <h1>RGPD - SÉCURITÉ DES DONNÉES - HASH</h1>
        <section>
            <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <label for="login">LOGIN</label>
                <input type="text" name="login"/>
                <label for="password">PASSWORD</label>
                <input type="password" name="password"/>
                <input type="submit" value="SOUMETTRE" name="envoyer"/>

            </form>
        </section>
        <section>
            <?php
                //ACHTUNG : MAUVAISES PRATIQUES !
                // var_dump() affiche les informations structurées d'une variable, y compris son chemin, son type, sa longueur et sa valeur.
                var_dump ($_POST['password']);
                // MD5 et SHA1 fortement déconseillés car cassables facilement
                var_dump(md5($_POST['password']));
                // Le chiffrement en MD5 est unilatéral
                // Ex : toto crypté donne en MD5 : f71dbe52628a3f83a77ab494817525c6
                // Décryptage facile sur des sites comme : https://md5decrypt.net/
                var_dump(md5("-/*54".$_POST['password']));
                //On peut aussi rajouter du SALT (ici "-/*54".) en ajoutant des caractères pour éviter que les pass soient faciles à casser
                //Méthode crypt est une autre méthode de chiffrement depuis PHP4
                //sans SALT
                var_dump(crypt(md5($_POST['password'])));
                //Avec SALT
                var_dump(crypt(md5($_POST['password']),"-/*54"));

                //MIEUX MAIS TROUVABLE AVEC LES RAINBOW TABLES sha256 ou sha512 bits
                $password=$_POST['password'];
                var_dump(hash("sha256", $password));
                var_dump(hash("sha512", $password));

                //AVEC PASSWORD DE HASH
                //UTILISATION DE L'ALGORITHME EN PASSWORD DE HASH
                //4 méthodes de chiffrement : https://www.php.net/manual/fr/function.password-hash.php. La 1ère conseillée.
                //Incassable pour l'instant - Change à chaque chargement
                var_dump(password_hash($password,PASSWORD_DEFAULT));
                //Pour vérification du password https://www.php.net/manual/fr/function.password-verify.php
                //La fonction password-verify permet de remonter le HASH de la BDD et vérifier l'authentification

                //Faire la différence entre l'encodage, le chiffrement et la cryptographie pour éviter les amalgames
                //Une fonction existe en PHP qui compte le nombre d'erreurs de saisie de password



            ?>            
        </section>
    </body>
</html>
