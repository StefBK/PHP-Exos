<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main18.css" />
    </head>
    <body>
<!-- // On veut un champ dans lequel on tape soit une voyelle soit une consonne
// Convertir les minuscules en majuscules
// Si voyelle, annonce que c'est une voyelle
// Si consonne, annonce que c'est une consonne
// Méthode SWITCH -->
    <section>
        <form action="exo-18.php" method="POST" enctype="multipart/form-data">
            <label>Taper une lettre</label>
            <input type="text" name="carac" maxlength="1" required />
            <br/>
            <input type="submit" value="Soumettre1" name="envoyer1" />
            <input type="submit" value="Soumettre2" name="envoyer2" />
        </form>
    </section>
    <!-- Traitement du caractère avec un SWITCH -->
    <section>
    <?php
        if(isset($_POST['envoyer1'])){
            $texte=strtoupper($_POST['carac']);
            switch($texte){
                case 'A':
                case 'E':
                case 'I':
                case 'O':
                case 'U':
                case 'Y':
                    echo("Vous avez saisi le caractère $texte. C'est une voyelle !");
                    break;
                default:
                    echo("Vous avez saisi le caractère $texte. C'est une consonne !");
            }
        }
    // <!-- Traitement du caractère avec un WHILE et un ARRAY -->
        if(isset($_POST['envoyer2'])){
            $caractere=strtoupper($_POST['carac']);
            $lettre=array('A','E','I','O','U','Y');
            $indice=0;
            while($indice<count($lettre)){
                if($lettre[$indice]==$caractere){
                    echo("Vous avez saisi le caractère $caractere. C'est une voyelle !");
                    break;
                }
                else{
                    echo("Vous avez saisi le caractère $caractere. C'est une consonne !");
                    break;
                }
            $indice++;
            }
        }
    ?>
    </section>
    </body>
</html>