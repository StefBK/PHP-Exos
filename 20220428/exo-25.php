<?php
    session_start();

    // if(isset($_SESSION['compteur'])){
    //     echo $_SESSION['compteur'];
    // }else{
    //     $_SESSION['compteur']=0;
    // }
    if(isset($_SESSION['compteur'])){echo $_SESSION['compteur'];}else{$_SESSION['compteur']=0;}

    if(isset($_POST['envoyer'])){
        if((isset($_POST['login'])=="jedi")&&($_POST['pass']=="toor")){
            header("location:exo-25-authentification.php");
            exit;
        }else{
            $_SESSION['compteur']++;
            if ($_SESSION['compteur']<4){
                header("location:exo-25.php");
                exit;
            }else{
                header("location:exo-25-noauthentification.php");
                exit;
            }
        }
    }

    if(isset($_POST['supprimer'])){
        session_unset();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 25</title>
        <link rel="stylesheet" href="css/main25.css" />
    </head>
    <body>
        <!-- Créer une page authentification.php
Avec un h1 "Vous êtes autorisé à accéder à cette page"
Créer une autre page noauthentification.php
Avec un h1 "Vous n'êtes pas autorisé à accéder à cette page"
Créer une page exo25.php avec un FORM LOGIN + PASSWORD (type="password")+ SOUMETTRE
Si erreur, RECHARGE, sinon à la 3ème erreur=>BANNI
La redirection se fait avec la méthode HEADER() qui permet de rediriger vers une page en PHP -->
        <h1>AUTHENTIFICATION</h1>
        <section>
        <table>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                    <tr>
                        <td>
                            <label>LOGIN</label>
                        </td>
                        <td>
                            <input class="form" type="text" name="login" placeholder="Saisir votre login" maxlength="25" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>MOT DE PASSE</label>
                        </td>
                        <td>
                            <input class="form" type="password" name="pass" placeholder="Saisir votre mot de passe" maxlength="25" required/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="LOGIN" name="envoyer" />
                            <input type="submit" value="LOGOUT" name="supprimer" />
                        </td>
                    </tr>
                </form>
            </table>
        </section>
        <div>
            <?php
            ?>
        </div>
    </body>
</html>