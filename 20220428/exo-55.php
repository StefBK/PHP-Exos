<?php
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Compatibilité avec EDGE-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--Compatibilité avec IPHONE-->
        <title>Exercice 55</title>
        <link rel="stylesheet" href="css/main53.css" />
    </head>
    <body>
        <!-- Utiliser une  fonction pour envoyer un mail
        Utiliser PHP-MAILER (un des outils les plus utilisés en PHP) en marketing automation pour des envois en masse-->
        <h1>EMAIL - ENVOI - FORMAT TEXTE BRUT</h1>
        <?php
            //Destinataire
            $destinataire="stefstef@gmail.com";
            //Objet du Message
            $objet="Inscription au DWWM";
            //Message
            //On concatène car la fonction MAIL tronque tous les 70 caractères (également possible avec un wordwrap en précisant un retour à la ligne tous les 70 caractères)=> wordwrap("Bonjour les Geeks \n",70)
            
            //Message au Format Texte Brut
            $message="Bonjour les Geeks. \n";
            $message.="Votre inscription a été prise en compte. \n";
            $message.="Nous vous informons que votre examen sera le : \n";
            $message.="21/05/2002 dans notre Centre de Valence. \n";
            $message.="Les horaires sont de 09h00 à 12h30. \n";
            $message.="Votre Conseiller Régional d'Orientation \n";
            $message.="Tributaire des Tubercules Éclectiques. \n";
            echo $message;
            // Renvoie un Booléen.
            $ok=mail($destinataire, $objet, $message);
            //Pour que la fonction mail fonctionne, le PHP.INI doit configurer le protocole SMTP, par défaut port 25 et le NDD
            if($ok){
                echo "Le message a bien été envoyé !";
            }else{
                echo "Le message n'a pa pu être envoyé !";
            }
            // Pour envoi mail, il existe 3 protocoles de messagerie : POP, SMTP ou IMAP.
            // Paramètres pour la gestion de l'envoi de mail dans PHP.INI
            // Dans PHP.INI on définit le NDD ainsi que le port 
            // SMTP Simple Mail tranfer Protocole sur port 25 : Protocole qui sort et envoie le message
            // POP Post Office Protocol sur port 110 : Protocole qui réceptionne le message mais IMAP est plus sécurisé
            // IMAP Interactive Message Access Protocol sur port 143 : Protocole qui réceptionne le message
            // Pour accéder aux messages à partir de n'importe quelle connexion, paramètres :
            // Port 995 (POP)
            // Port 465 (SMTP)
            // Méthode de Chiffrement SSL

        $new_message=wordwrap("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla laboriosam porro tempora cumque quod eum deserunt ipsum numquam sunt? Ipsam iusto itaque, hic consequatur nemo quia ex impedit enim est perferendis maxime tenetur quos obcaecati, eum assumenda aspernatur consectetur id nostrum vitae soluta maiores libero sed. Eum quaerat modi molestiae tempora! Ab eum sunt, dolore eaque cumque consequuntur possimus amet minus, dolorem excepturi perspiciatis eius mollitia porro nihil labore soluta vitae sit ea fugiat, tempore odit repudiandae fugit corrupti quos? Doloremque est cumque quidem totam vitae aperiam, incidunt iusto maxime praesentium porro, perspiciatis voluptatum explicabo consequuntur atque dicta deserunt. Sequi reprehenderit ipsam sapiente nemo? Consequatur, quidem. Quam, illo fugiat. Reiciendis nisi veniam, eveniet obcaecati eaque laudantium id quae? Assumenda, eum odit vitae similique molestias accusantium sint quas quisquam ipsum ducimus eius aliquid esse reprehenderit tempora mollitia corporis, sapiente quibusdam quod qui doloribus, nostrum possimus magnam alias et. Cupiditate aut explicabo sed accusantium consequuntur, architecto eveniet odit id? Iusto labore sint ipsam optio totam, consequatur deserunt quasi et. Quos fuga perspiciatis pariatur optio. Accusantium ex molestiae maiores atque laboriosam voluptas, rerum ipsam quos! Quasi, nam deserunt! Autem quam, magnam excepturi placeat ad consequuntur. Fugit unde, rerum ratione aperiam velit reprehenderit natus blanditiis eveniet iusto voluptatum beatae ipsam deserunt vitae. Impedit fuga quam, laudantium aut veritatis aliquid illo, neque necessitatibus cum architecto porro quibusdam, commodi maiores possimus quis laborum culpa assumenda doloremque soluta nisi totam ex! Perspiciatis voluptatibus magnam necessitatibus animi blanditiis quaerat facilis similique repellat! Ullam labore nisi quo vel quis.",70);
        echo $new_message;
            
        ?>
    </body>
</html>
