<?php
    //Création de la Fonction pour afficher des informations suivant la méthode
    function affichage_theme($langage){
        echo "<h2>Voici d'Article sur ",strtoupper($langage),"</h2>";

        // Lecture du Fichier avec READFILE
        echo "<div>";
        echo"<h4>LECTURE avec readfile()</h4>";
        readfile("exo-52-".$langage.".txt",TRUE);
        echo "</div>";

        // Lecture du Fichier avec FPASSTHRU
        echo "<div>";
        echo"<h4>LECTURE avec fpassthru()</h4>";
        $id_file=fopen("exo-52-".$langage.".txt","r");
        fpassthru($id_file);
        echo "</div>";

        // Lecture du Fichier avec FILE
        echo "<div>";
        echo"<h4>LECTURE avec file()</h4>";
        $tab=file("exo-52-".$langage.".txt",1);
        for($i=0;$i<count($tab);$i++){
            echo $tab[$i],"<br/>";
        }
        echo "</div>";
    }
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 52</title>
        <link rel="stylesheet" href="css/main52.css" />
    </head>
    <body>
        <!-- 4 Boutons - 4 sujets - 4 fichiers textes.
        Utilisation de 3 fonctions :
        readfile() : Lit tout le fichier
        fpassthru() : Idem
        file() : À balayer avec un FOR
        3 sections d'affichage. -->
        <h1>Affichage des Fichiers suivant le Thème</h1>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>CHOISISSEZ VOTRE SUJET !</legend>
                    <table>
                        <tr>
                            <td>
                                <input type="submit" value="HTML" name="langage" />
                                <input type="submit" value="JAVASCRIPT" name="langage" />
                                <input type="submit" value="PHP" name="langage" />
                                <input type="submit" value="ASP" name="langage" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </section>
        
        <?php
            //Affichage
            if(isset($_POST['langage'])){
                affichage_theme($_POST['langage']);
            }
        ?>
        
    </body>
</html>