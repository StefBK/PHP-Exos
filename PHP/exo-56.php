<?php
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Compatibilité avec EDGE-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--Compatibilité avec IPHONE-->
        <title>Exercice 56</title>
        <link rel="stylesheet" href="css/main53.css" />
    </head>
    <body>
        <!-- Utiliser une fonction pour envoyer un mail au Format HTML -->

        <h1>EMAIL - ENVOI - FORMAT HTML</h1>
        <?php
            $destinataire="stefstef@gmail.com";
            $objet="Demande d'Inscription";
            
            //Entêtes Supplémentaires
            $entetes="FROM: \'Père Noël\'<stefstef@gmail.com>\r\n";
            //"\'" permet d'avoir la simple côte en affichage = Caractère d'échappement
            $entetes.="MIME-Version: 1.0\r\n";
            //Le Type MIME est un type d'encodage qui permet de prendre en compte la nature et le format d'un document
            $entetes.="Content-Type: text/html; charset=utf-8\r\n";
            //UTF : Universal Character Set Transformation Format - 8 bits (256 caractères de la Langue Française)
            $entetes.="Content-Transfer-Encoding:8bits\r\n";

            //MESSAGE HTML
            $message="<html>\n";
            $message.="<head><title>HELLO</title></head>\n";
            $message.="<body>\n";
            $message.="<font color=\"darkviolet\"> Bonjour ! </font>\n";
            $message.="</body>\n";
            $message.="</html>\n";

            $ok=mail($destinataire,$objet,$message,$entetes);
            //Les entêtes se mettent toujours en dernier
            if($ok){
                echo "Le message a bien été envoyé !";
            }else{
                echo "Le message n'a pa pu être envoyé !";
            }

        ?>
    </body>
</html>
