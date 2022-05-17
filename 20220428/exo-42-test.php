<?php
       
    echo $_POST['nom'];
    echo $_POST['prenom'];

?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 42</title>
       
    </head>
    <body>


        <h1>Livre d'Or</h1>
        <section>
            <form action="" method="POST"  >
                <label>Nom</label>
                <input  type="text" name="nom"/>
                <input type="submit" value="SOUMETTRE" name="envoyer" />
                <input type="reset" value="ANNULER" name="annuler" />
            </form>
        </section>
        <div>
            
          
        </div>
    </body>
</html>