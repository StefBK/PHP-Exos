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
                //Une fonction existe en PHP qui compte le nombre d'erreurs de saisie de password :

                // 1°)ENCODAGE : L'encodage est un processus de modification d'une valeur (texte, fichier, …) pour un autre.
                // But de l'encodage : Transformer les données afin qu'elles puissent être correctement interprétées par un autre type de système.

                // 2°)CHIFFREMENT : En cryptographie, on encode un texte de telle sorte que seules des personnes autorisées puissent le déchiffrer. Ici, le processus d'encodage se nomme : "chiffrement". Le mot cryptage n'existe pas. Il existe deux modes de chiffrement.
                        //1- Symétrique : On peut utiliser la même clé de chiffrement pour chiffrer/déchiffrer un message.
                        //2- Asymétrique : Les clés pour chiffrer et déchiffrer sont différentes.
                //Ainsi, seulement les personnes possédant la bonne clé peuvent accéder au message.
                //Déchiffrer = décoder un message chiffré EN CONNAISSANT la clé de chiffrement qui a été utilisée pour le rendre incompréhensible... c'est donc très rapide.
                //But du chiffrement : Transformer les données afin de les garder secrètes des autres et qu'elles ne puissent pas être consommées par une personne autre que le destinataire. Il faut une clef pour déchiffrer.

                // 3°)CRYPTOGRAPHIE : Contrairement au terme cryptage qui n'existe pas, décrypter signifie tenter, sans la clé de déchiffrement, de retrouver le message original.
                //Décrypter = décoder un message chiffré SANS CONNAÎTRE la clé de chiffrement qui a été utilisée pour le rendre incompréhensible... C'est un "sport" plus ou moins rapide qui est très pratiqué en temps de guerre par exemple quand on intercepte des messages chiffrés de l'ennemi. On appelle cette opération "casser la clef". "Crypter" n'a donc aucun sens dans ce contexte.

                // 4°)HACHAGE : Une fonction de hachage est un algorithme permettant de modifier un texte (appelé message) en valeur de longueur fixe (appelé hash). Un hash ne peut pas être dé-haché pour trouver le message initial.
                        //La même entrée produit toujours la même sortie.
                        //Plusieurs entrées disparates ne doivent pas produire la même sortie.
                        //Il ne doit pas être possible de passer de la sortie à l'entrée.
                        //Toute modification d'une entrée donnée devrait entraîner un changement radical du hachage.


            ?>            
        </section>
    </body>
</html>
