<?php
    if((isset($_POST['choix']))&&(isset($_POST['envoyer']))){
        //Vérification des cookies pour savoir si vote déjà effectué
        //Si oui, signaler que déjà voté
        //Sinon, générer les cookies et la saisie dans le fichier sondage
        //Faire un cookie pour le vote et un deuxième pour le choix pour les récupérer en JS
        if((isset($_COOKIE['votant']))&&(isset($_COOKIE['vote']))){
            $vote=$_COOKIE['vote'];
        ?>
        <!-- <script language="javascript" type="text/javascript"> -->
        <script>
            alert("Vous avez déjà voté pour <?php echo $vote ?>");
            // On aurait aussi pu utiliser $_POST['choix'] au lieu de $vote
        </script>
        <?php
        }else{
            setcookie("votant","true",time()+60);
            setcookie("vote","{$_POST['choix']}",time()+60);
            // Inscription dans un fichier en vérifiant si le fichier existe filexists.
            // Si oui fopen mode a + fwrite + fclose
            // Sinon le créer fopen mode w + fwrite + fclose
            // Le "a" les met à la suite, le "w" les écrase
            if (file_exists('./fichier/sondage.txt')){
                $fichier=fopen('./fichier/sondage.txt','a');
                fwrite($fichier, $_POST['choix']."\n");
                fclose($fichier);
            }else{
                $fichier=fopen('./fichier/sondage.txt','w');
                fwrite($fichier, $_POST['choix']."\n");
                fclose($fichier);
            }
            ?>
            <script>
                alert("Merci pour votre vote pour <?php echo $_POST['choix'] ?>");
            </script>
            <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 48</title>
        <link rel="stylesheet" href="css/main48.css" />
    </head>
    <body>
<!-- Faire un formulaire de gestion de votes
Ne pas pouvoir revoter pendant 60 secondes avec message
Après le cookie est supprimé et on peut revoter
Avec fichier récap de tous les votes
Titre : Bienvenue sur le site des geeks de la formation DWWM
Votez pour votre technologie internet préférée
Choix 1 : PHP/MySQL
Choix 2 : ASP.Net
Choix 3 : JSP
Bouton ENVOI label Votez ! 
Type radio, même name
Merci de votre vote pour ou Vous avez déjà voté pour -->
        <h1>Formulaire de Vote</h1>
        <section>
            <legend>Votez pour votre Technologie Internet Préférée :</legend>
            <table>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <tr>
                        <td>
                            <label>Choix N°1 : </label>
                        </td>
                        <td>
                            <input type="radio" name="choix" value="PHP/MySQL"/>&nbsp;PHP/MySQL
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Choix N°2 : </label>
                        </td>
                        <td>
                            <input type="radio" name="choix" value="ASP.Net"/>&nbsp;ASP.Net
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Choix N°3 : </label>
                        </td>
                        <td>
                            <input type="radio" name="choix" value="JSP"/>&nbsp;JSP
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votez ! </label>
                        </td>
                        <td>
                            <input type="submit" value="ENVOI" name="envoyer" />
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