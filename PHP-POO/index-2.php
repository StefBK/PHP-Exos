<?php

//CONSTRUCTEUR :
//Initialisation des attributs en dehors de la classe, dans un constructeur (suivi d'un destructeur)

class FonctionConstructeur
{
    //CAS N°1 : Initialisation de la variable à l'extérieur du CONSTRUCTEUR
    //private $texte='Ah que coucou !';

    //Méthode Magique (avec double underscore devant le construct)
    //public function __construct(){
    //    echo $this->texte;
    //}

    //CAS N°2 : Initialisation de la variable à l'intérieur du CONSTRUCTEUR : HYDRATATION : On hydrate les variables en initialisant les attributs par défaut dans le CONSTRUCTEUR
    //private $texte;

    //public function __construct(){
    //    echo $this->texte="Vivent les DWWM<br />";
    //}

    //CAS N°3 : 2 attributs
    //private $texte;
    //private $couleur;

    //public function __construct(){
    //    echo $this->texte="Vivent les DWWM<br />";
    //    echo $this->couleur="Rouge<br />";
    //}

    //CAS N°4 : Retourner la date d'inscription
    private $nom;
    private $cours;

    //public function __construct(){
        //Tout ce qui est dans le CONSTRUCTEUR apparaît pour chaque objet instancié
        //echo $this->dateinscription=date('d/m/Y').'<br />';
        //On met dans le CONSTRUCTEUR ce qui est commun à tous les Objets
        //echo $this->dateinscription='Ce(tte) stagiaire a été inscrit(e) le : '.date('d/m/Y').'<br />';

    //}

    //public function affichageNom($nom){
    //    return $this->nom=$nom;
    //}

    //public function affichageCours($cours){
    //    return $this->cours=$cours;
    //}

    //On peut rajouter des paramètres dans le CONSTRUCTEUR :
    //Avant PHP7 on pouvait écrire le nom de la classe à la place de__construct pour définir le constructeur
    public function __construct($nom, $cours){
        //On initialise les attributs à l'aide du CONSTRUCTEUR
        echo $this->dateinscription='Ce(tte) stagiaire a été inscrit(e) le : '.date('d/m/Y').'<br />';
        $this->nom=$nom;
        $this->cours=$cours;
    }

    //Nettoyage par un destructeur (pas nécessaire en PHP8 anymore). Il fermera toutes les instances ouvertes (d'office avec PHP8).
    public function __destruct(){

    }

    public function affichageNom(){
        return $this->nom;
    }

    public function affichageCours(){
        return $this->cours;
    }

}

//Ici on initialise avec le nom de la classe
//$affichagetexte=new FonctionConstructeur();
//$affichage=new FonctionConstructeur();
//$voiture1=new FonctionConstructeur;
//$stagiaire= new FonctionConstructeur;
//echo $stagiaire->affichageNom('Stef').'<br />';
//echo $stagiaire->affichageCours('PHP POO').'<br />';
//echo 'Ce(tte) stagiaire a été inscrit(e) le : '.$stagiaire->dateinscription.'<br />';
//Chaque objet hérite de ce qui est dans le CONSTRUCTEUR
//$stagiaire2= new FonctionConstructeur;
$stagiaire= new FonctionConstructeur('Stef','PHP POO');
echo $stagiaire->affichageNom().'<br />';
echo $stagiaire->affichageCours().'<br />';
