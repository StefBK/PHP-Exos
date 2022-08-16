<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 46</title>
        <link rel="stylesheet" href="css/main46.css" />
    </head>
    <body>
    <!-- Faire un Formulaire
    AVEC LOGIN + PASS + ENVOYER + ANNULER
    Si LOGIN et PAS sont bons, génère un cookie (+24h)
    Si pas bon, le supprime (-24h) -->
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
                        setcookie('access','ok',time()+(24*3600));
                        echo"<h2 class='yes'>Accès Autorisé</h2>";
                    }else{
                        setcookie('access','ok',time()-(24*3600));
                        echo"<h2 class='no'>Accès Non Autorisé</h2>";
                    }
                }
            ?>
        </div>
    </body>
</html>