<?php
    if(isset($_POST['envoyer'])){
        $date=date('\l\e j-m-y à H : i : s');
        $fichier=fopen("livre.txt","a+");
        fwrite($fichier,"\n");
        fwrite($fichier,str_repeat("-",125)."\n");
        fwrite($fichier, "<strong>".$date."</strong>\n");
        fwrite($fichier,htmlspecialchars($_POST['pseudo'])."\n");
        fwrite($fichier,htmlspecialchars($_POST['objet'])."\n");
        fwrite($fichier,htmlspecialchars($_POST['message'])."\n");
        fwrite($fichier,str_repeat("-",125)."\n");
        fclose($fichier);
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Inclusion de fichier</title>
        <link rel="stylesheet" href="css/main5.css" />
        
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comforter+Brush&family=Dancing+Script:wght@600&family=Grape+Nuts&family=Josefin+Sans&family=Mochiy+Pop+P+One&family=Oswald:wght@500&family=Redressed&family=Sedgwick+Ave&family=The+Nautigal&display=swap" rel="stylesheet">
       
    </head>
    <body>
        <h1> Le livre d'Or</h1>
        <table>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
                <tr>
                    <td><label for="pseudo">Votre pseudo</label></td>
                    <td><input type="text" name="pseudo"  required /></td>
                </tr>
                <tr>
                    <td><label for="objet">Objet du message</label></td>
                    <td><input type="text" name="objet"  required /></td>
                </tr>
                <tr>
                    <td><label for="message">Votre message</label></td>
                    <td><textarea cols="50" row="100" name="message" required ></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Poster" name="envoyer" />
                        <input type="reset" value="Annuler" name="annuler" />
                    </td>
                </tr>

            </form>
        </table>
       
        <div>
            <?php
                $fichier=fopen("livre.txt","r");
                    while (!feof($fichier)){
                            echo fgets($fichier)."<br/>";
                    }
                fclose($fichier);
                        
              
            ?>
        </div>
       
    </body>
</html>

