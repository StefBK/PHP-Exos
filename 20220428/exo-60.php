<?php
    session_start();

    if(!isset($_SESSION['compteur'])){$_SESSION['compteur']=0;}
    
    // Vérification du LOGIN+PASS & Compteur
    if(isset($_POST['soumettre'])){
        // if(htmlspecialchars(isset($_POST['login'])=="jedi"&&($_POST['password']=="toor"))){=>ISSET INUTILE PAS BOUTON
        if(htmlspecialchars($_POST['login'])=="jedi"&&($_POST['password']=="toor")){
                header("location:exo-60-authentification.php");
            $_SESSION['compteur']=0;
            exit();
        }else{
            $_SESSION['compteur']++;
            if ($_SESSION['compteur']<4){
                header("location:exo-60.php");
            }else{
                header("location:exo-60-noauthentification.php");
                exit();
                $_SESSION['compteur']=0;
            }
        }
    }

    // Suppression de l'Initialisation de l'ID SESSION
    if(isset($_POST['logout'])){
        session_unset();
        // UNSET FACULTATIF : Possible détruire sans vider l'ID
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Compatibilité avec EDGE-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--Compatibilité avec IPHONE-->
        <title>Exercice 60</title>
        <link rel="stylesheet" href="css/main60.css" />
    </head>
    <body>
        <!-- Fichier SQL pour DUMPER une BDD (pas de jointure)
            Authentification avec les SESSIONS (boucle compteur noauthentification ou authentification avec boutons pour basculer sur une Page pour ajouter des éléments affichés en-dessous ou page 2 modifier pour rechercher d'abord le cllient et affichage dans champs formulaires modifiables
            Chercher un id client et supprimer un ID client (SCRUD en SQL). -->
        <h1>BASE SQL</h1>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <legend><h2>Authentification</h2></legend>
                <table>
                    <tbody>
                        <tr>
                            <td><label for="login">LOGIN</label></td>
                            <td>
                                <input class="form" type="text" name="login" placeholder="Saisir votre login" maxlength="40"/>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="password">PASSWORD</label></td>
                            <td>
                                <input class="form" type="password" name="password" placeholder="Saisir votre password" maxlength="40"/>
                            </td>
                        </tr>
                    </tbody>
                    <tfooter>
                        <tr>
                            <td colspan="2">
                                <input class="btn" type="submit" value="SOUMETTRE" name="soumettre" />
                                <input class="btn" type="reset" value="ANNULER" name="annuler" />
                                <input class="btn" type="submit" value="LOGOUT" name="logout" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <?php
                                echo "<p>Votre numéro de session est : <strong>".session_id()."</strong></p>";
                            ?>
                            </td>
                        </tr>
                    </tfooter>
                </table>
            </form>

        </section>
    </body>
</html>
