<?php
    // Connexion au serveur MySQL
    $db_connexion=mysqli_connect('localhost','root','');
    if ($db_connexion){
        echo ("Connexion au Serveur réussie<br/>");
    } else{
        echo ("Impossible de se connecter au Serveur<br/>");
    }
    //Connexion à la BDD//
    $db_base=mysqli_select_db($db_connexion, 'dwwm');
    if ($db_base){
        echo ("Connexion à la Base de Données réussie<br/>");
    } else{
        echo ("Impossible de se connecter à la Base de Données<br/>");
    }
    //N'envoyer les informations à la BDD que lorsqu'on clique sur le bouton ENVOYER.//
    // Initialisation d'une méthode ISSET pour insérer les données dans la table//
    if(isset($_POST['envoyer'])){
        $sexe=$_POST['sexe'];
        $nom=$_POST['nom'];
        $db_ajout="INSERT INTO clients(Sexe, Nom) VALUES ('$sexe','$nom')";
        $db_execution=mysqli_query($db_connexion,$db_ajout);

        //Requête SQL qui sélectionne tous les enregistrements de la table clients
        $db_afficher="SELECT * FROM clients";
        $db_execution=mysqli_query($db_connexion,$db_afficher);

        //Compte le nombre de lignes dans la table
        echo("</br>Vous avez : ".mysqli_num_rows($db_execution)." entrées dans votre table clients.");

        //Balayer la variable $db_execution pour récupérer chaque ligne de chaque table
        while($ligne=mysqli_fetch_array($db_execution)){
            echo($ligne[0]." ".$ligne[1]."</br>");
        }

    }
    //Ne jamais laisser une instance ouverte//
    $db_fermeture=mysqli_close($db_connexion);
?>