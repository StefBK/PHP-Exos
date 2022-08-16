<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 49</title>
        <link rel="stylesheet" href="css/main48.css" />
    </head>
    <body>
<!-- Faire un formulaire. Entrer nom et prénom + envoyer et annuler -->
        <h1>Gestion des Sessions</h1>
        <section>
            <!-- <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data"> -->
            <!-- Envoi vers une autre page -->
            <form action="exo-49-traitement.php" method="POST" enctype="multipart/form-data">

                <fieldset>
                    <legend>AUTHENTIFICATION</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td><label for="prenom">PRÉNOM</label></td>
                                <td>
                                    <input class="form" type="text" name="prenom" placeholder="Saisir votre prénom" maxlength="40" required/>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="nom">NOM</label></td>
                                <td>
                                    <input class="form" type="text" name="nom" placeholder="Saisir votre prénom" maxlength="40" required/>
                                </td>
                            </tr>
                        </tbody>
                        <tfooter>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="ENVOYER" name="envoyer" />
                                    <input type="reset" value="ANNULER" name="annuler" />
                                </td>
                            </tr>
                        </tfooter>
                    </table>
                </fieldset>
            </form>
        </section>
        <div>
            <?php
            
            ?>
        </div>
    </body>
</html>