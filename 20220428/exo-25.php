<!-- Créer une page authentification.php
Avec un h1 "Vous êtes autorisé à accéder à cette page"
Créer une autre page noauthentification.php
Avec un h1 "Vous n'êtes pas autorisé à accéder à cette page"
Créer une page exo25.php avec un FORM LOGIN + PASSWORD (type="password")+ SOUMETTRE
Si erreur, RECHARGE, sinon à la 3ème erreur=>BANNI
La redirection se fait avec la méthode HEADER() qui permet de rediriger vers une page en PHP -->
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 25</title>
        <link rel="stylesheet" href="css/main25.css" />
    </head>
    <body>
        <section>
            <form action="exo-25.php" method="POST" >
                <label>LOGIN :</label>
                <input type="text" name="login" placeholder="Saisir un nombre" maxlength="25" required />
                <br/>
                <input type="password" name="pass" placeholder="Saisir un nombre" maxlength="25" required />
                <br/>
                <input type="submit" value="Traitement" name="soumettre" />
            </form>
            <?php
                $nom="jedi";
                $psw="toor";
                if(isset($_POST['soumettre'])){
                    if(($_POST['login']==$nom) && ($_POST['pass']==$psw)){
                        header('Location: exo-25-authentification.php');
                    }
                }else{
                        header('Location: exo-25-noauthentification.php');
                }
            ?>
        </section>
    </body>
</html>