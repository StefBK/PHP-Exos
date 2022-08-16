<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 47</title>
        <link rel="stylesheet" href="css/main46.css" />
    </head>
    <body>
    <!-- Idem à EXO 46
    Si le cookie est généré avec login et pass OK
    Rediriger vers page "authentification réussie" avec affichage cookie avec bouton qui renvoie sur la 1ère page avec history.back -->
        <h1>Gestion des Cookies</h1>
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
                            <input type="submit" value="SOUMETTRE" name="envoyer" />
                            <input type="reset" value="ANNULER" name="annuler" />
                        </td>
                    </tr>
                </form>
            </table>
        </section>
        <div>
            <?php
                $tableau=array('user'=>'jedi','pass'=>'toor');
                $login=$tableau['user'];
                $pass=$tableau['pass'];
                if(isset($_POST['envoyer'])){
                    if((($_POST['login'])==$login)&&(($_POST['pass'])==$pass)){
                        setcookie('access','OK',time()+(24*3600));
                        header("location:exo-47-authentification.php");
                    }else{
                        setcookie('access','OK',time()-(24*3600));
                        header("location:exo-47-noauthentification.php");
                    }
                }
            ?>
        </div>
    </body>
</html>