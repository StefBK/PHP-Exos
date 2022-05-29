<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 60</title>
        <link rel="stylesheet" href="css/main60-anx.css" />
    </head>
    <body>
        <section>
            <h2>RECHERCHER UN CLIENT</h2>
            <form action="exo-60-traitement.php" method="POST" enctype="multipart/form-data">
                <label for="Id_Client">CLIENT N°</label>
                <input type="text" name="id" placeholder="ID CLIENT" required/><br/>

                <input type="submit" value="ENVOYER" name="envoyer" />
                <input type="reset" value="ANNULER" name="annuler" />
            </form>
            <button onClick="javascript:history.back()">RETOUR À LA PAGE D'AUTHENTIFICATION</button>
        </section>
    </body>
</html>