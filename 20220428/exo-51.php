<?php
    error_reporting(0);
    session_start();

    //Ajouter
    if(isset($_POST['code'])&&($_POST['article'])&&($_POST['prix'])&&($_POST['ajouter'])){
        $code=$_POST['code'];
        $article=$_POST['article'];
        $prix=$_POST['prix'];

        $_SESSION['code']=$_SESSION['code']."/".$code;
        $_SESSION['article']=$_SESSION['article']."/".$article;
        $_SESSION['prix']=$_SESSION['prix']."/".$prix;

        // print_r($_SESSION['code']);
        // print_r($_SESSION['article']);
        // print_r($_SESSION['prix']);
    }

    //Logout    
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
    }

    //Vérifier
    if(isset($_POST['verifier'])){
        $tab_code=explode("/",$_SESSION['code']);
        $tab_article=explode("/",$_SESSION['article']);
        $tab_prix=explode("/",$_SESSION['prix']);

        echo "<table>";
        echo "<tr><td colspan='3'>RÉCAPITULATIF DE VOTRE COMMANDE</td></tr>";
        echo "<tr><th>&nbsp;Code&nbsp;</th><th>&nbsp,Article&nbsp;</th><th>&nbsp;Prix&nbsp;</th></tr>";
            for($i=1;$i<count($tab_code);$i++){

            }
        echo "</table>";
    }
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 51</title>
        <link rel="stylesheet" href="css/main51.css" />
    </head>
    <body>
        <!-- Formulaire de saisie d'articles :
        Code
        Article
        Prix
        3 variables de session dans 3 TD
        Boutons Ajouter + Vérifier + Logout 
        $_SESSION['code']=.$_SESSION['code']/-->

        <h1>Gestion de Panier</h1>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>SAISIE D'ARTICLES</legend>
                    <table>
                        <tbody>
                        <tr>
                                <td><label for="code">CODE</label></td>
                                <td>
                                    <input class="form" type="text" name="code" placeholder="Code de l'Article" maxlength="40"/>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="article">ARTICLE</label></td>
                                <td>
                                    <input class="form" type="text" name="article" placeholder="Désignation de l'Article" maxlength="40"/>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="code">PRIX</label></td>
                                <td>
                                    <input class="form" type="number" name="prix" placeholder="Prix de l'Article" maxlength="40"/>
                                </td>
                            </tr>
                        </tbody>
                        <tfooter>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="AJOUTER" name="ajouter" />
                                    <input type="submit" value="VÉRIFIER" name="verifier" />
                                    <input type="submit" value="LOGOUT" name="logout" />
                                </td>
                            </tr>
                        </tfooter>
                    </table>
                </fieldset>
            </form>
        </section>
        <div>

        </div>
    </body>
</html>