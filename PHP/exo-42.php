<?php

    if(isset($_POST['envoyer'])){
        $gold="gold.txt";
        $next=str_repeat("_",100);
        $fichier=fopen($gold,"a+");
        $date=date("d/m/Y à H:i");
        //$date=date('\L\e j-m-y à H : i : s'); => le \ empêche l'affichage correspondant à l (code pour le jour en anglais) et e (normalisation) sinon si 'le' afficherait 'tuesday UTC'
        $nom=$_POST['nom'];
        $objet=$_POST['objet'];
        $msg=$_POST['msg'];
        $entree="\n Le ".$date."\n".$nom." a écrit :\n".$objet." : ".$msg."\n".$next;
        fwrite($fichier,htmlspecialchars($entree));
        $next=str_repeat("_",100);
        fclose($fichier);
        // méthode htmlspecialchars :
        // fwrite($fichier,htmlspecialchars($_POST['nom'])."\n");
        // Utiliser \n au lieu de br car br n'est pas interprété dans un fichier texte et les messages ne sont que sur une ligne (illisible même si pas faux)
        // Permet d'éviter d'avoir des caractères spéciaux et les convertit en protégeant ce qui est récupéré
        // Protège d'injection de code XSS
        // Sinon htmlentities
    }
?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 42</title>
        <link rel="stylesheet" href="css/main42.css" />
    </head>
    <body>
<!-- Faire un formulaire gold d'Or avec Champs : Nom, Objet et Message + Boutons Soumettre et Annuler en haut de page centré
Et afficher les messages envoyés à la suite avec Date et Heure
Sans passer par une BDD
Fonctions pour écrire fwrite()
Mode ouverture fichier fopen a+
Lecture du fichier r même code while -->
        <h1>Livre d'Or</h1>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <label>Nom</label>
                <input class="form" type="text" name="nom" placeholder="Saisir votre nom" maxlength="55" required/>
                <br/>
                <label>Objet</label>
                <input class="form" type="text" name="objet" placeholder="Saisir l'objet de votre demande" maxlength="55" required/>
                <br/>
                <label>Message</label>
                <textarea class="form" cols="50" rows="5" name="msg" placeholder="Saisir votre message" maxlength="255" required></textarea>
                <br/>
                <input type="submit" value="SOUMETTRE" name="envoyer" />
                <input type="reset" value="ANNULER" name="annuler" />
            </form>
        </section>
        <div>
            <?php
                $fichier=fopen("gold.txt","r");
                    while(!feof($fichier)){
                        echo fgets($fichier,100)."<br/>";
                    }
                fclose($fichier);
            ?>
        </div>
    </body>
</html>