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
    $total_prix=0;
    if(isset($_POST['verifier'])){
        $tab_code=explode("/",$_SESSION['code']);
        $tab_article=explode("/",$_SESSION['article']);
        $tab_prix=explode("/",$_SESSION['prix']);

        echo "<table class='tabverif'>";
        echo "<tr><td colspan='3'>RÉCAPITULATIF DE VOTRE COMMANDE</td></tr>";
        echo "<tr><th>&nbsp;CODE&nbsp;</th><th>&nbsp;ARTICLE&nbsp;</th><th>&nbsp;PRIX&nbsp;</th></tr>";
            for($i=1;$i<count($tab_code);$i++){
                // echo "<tr><td>&nbsp;".$tab_code[$i]."&nbsp;</td><td>&nbsp;".$tab_article[$i]."&nbsp;</td><td>&nbsp;".$tab_prix[$i]."</td></tr>";
                echo "<tr><td>&nbsp;$tab_code[$i]&nbsp;</td><td>&nbsp;$tab_article[$i]&nbsp;</td><td class='total_prix'>&nbsp;".sprintf('%01.2f €',$tab_prix[$i])."</td></tr>";
                $total_prix+=$tab_prix[$i];
            }
        echo "<tr><td class='total_prix' colspan='3'>".sprintf('%01.2f €',$total_prix)."</td></tr>";
        echo "</table>";
    }

    //Enregistrer
    if(isset($_POST['enregistrer'])){
        $fichier=fopen('exo-51-panier.txt','w');
        $tab_code=explode("/",$_SESSION['code']);
        $tab_article=explode("/",$_SESSION['article']);
        $tab_prix=explode("/",$_SESSION['prix']);
        for($i=1;$i<count($tab_code);$i++){
            fwrite($fichier,"\r\n");
            fwrite($fichier,$tab_code[$i]." | ".$tab_article[$i]." | ".$tab_prix[$i]);
        }
        fclose($fichier);
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
                                <td><label for="prix">PRIX</label></td>
                                <td>
                                    <input class="form" type="text" name="prix" placeholder="Prix de l'Article" maxlength="40"/>
                                </td>
                            </tr>
                        </tbody>
                        <tfooter>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="AJOUTER" name="ajouter" />
                                    <input type="submit" value="VÉRIFIER" name="verifier" />
                                    <input type="submit" value="ENREGISTRER" name="enregistrer" />
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