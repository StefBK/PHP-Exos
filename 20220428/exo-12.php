 <!-- Création de variables -->
 <?php
    $nombre=5;
?>


<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <form action="">
            <div>
                Indiquez vos 5 compétences principales : <br/>
                <!-- Création de 5 cases -->
                <?php for ($compteur=1;$compteur<=$nombre;$compteur++): ?>
                <input type="text"/><br/>
                <!-- Fermeture du for -->
                <?php endfor ?>
                <input type="submit" value="soumettre"/>
            </div>
        </form>
        <form action="">
            <div>
                Indiquez vos 5 compétences principales : <br/>
                <!-- Le ++ avant le compteur ne change rien dans le for -->
                <?php for ($compteur=1;$compteur<=$nombre;++$compteur): ?>
                <input type="text"/><br/>
                <?php endfor ?>
                <input type="submit" value="soumettre"/>
            </div>
        </form>
        <!-- Autre écriture en PHP -->
        <form action="">
            <div>
                Indiquez vos 5 compétences principales : <br/>
                <?php
                for ($compteur=1;$compteur<=$nombre;$compteur++){
                    echo("<input type='text' name='comptence'/><br/>");
                }
                echo("<input type='submit' value='soumettre'/>");
                ?>
            </div>
        </form>
    </body>
</html>