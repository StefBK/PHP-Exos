<?php
    session_start();
    if((isset($_POST['login'])=="geekmachin")&&($_POST['password']=="2669")){
        // On peut créer autant de variables de session qu'on veut
        $_SESSION['acces']="oui";
        $_SESSION['nom']=$_POST['login'];
    }
    if(isset($_POST['supprimer'])){
        session_unset();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 50</title>
        <link rel="stylesheet" href="css/main50.css" />
    </head>
    <body>
        <!-- Faire un formulaire d'authentification avec un login et un pass
        2 liens : pagehtml.php et pagephp.php
        Pour y accéder, être authentifié (récupéré par des variables de session)
        Si pas authentifié, cliquer sur le lien fait revenir sur la 1ère page
        Si authentifié, passer d'une de ces 2 pages à l'autre incrémente un compteur -->

        <h1>Authentification des Utilisateurs</h1>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>AUTHENTIFICATION DES UTILISATEURS</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td><label for="login">LOGIN</label></td>
                                <td>
                                    <input class="form" type="text" name="login" placeholder="Saisir votre login" maxlength="40" required/>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="password">PASSWORD</label></td>
                                <td>
                                    <input class="form" type="password" name="password" placeholder="Saisir votre password" maxlength="40" required/>
                                </td>
                            </tr>
                        </tbody>
                        <tfooter>
                            <tr>
                                <td colspan="2">
                                    <input class="btn" type="submit" value="ENVOYER" name="envoyer" />
                                    <input class="btn" type="reset" value="ANNULER" name="annuler" />
                                    <input class="btn" type="submit" value="LOGOUT" name="supprimer" />
                                </td>
                            </tr>
                        </tfooter>
                    </table>
                </fieldset>
            </form>
        </section>
        <div>
            <li><a href="exo-50-pagehtml.php">PAGE HTML</a></li>
            <?php if(isset($_SESSION['html'])) echo "vue ".$_SESSION['html']." fois"; ?>
            <li><a href="exo-50-pagephp.php">PAGE PHP</a></li>
            <?php if(isset($_SESSION['php'])) echo "vue ".$_SESSION['php']." fois"; ?>
            <!-- Ces cessions n'existent pas encore. Le compteur sera incrémenté au parcours des pages secondaires.
            Sur chaque page, si ISSET de SESSION (=si variable initialisée), compteur à incrémenter sinon SESSION=0 -->

        </div>
    </body>
</html>