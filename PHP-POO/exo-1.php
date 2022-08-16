<?php

//CONSIGNES :
//3 attributs de type PRIVATE : couleur, puissance et vitesse
//Couleur = couleur de son choix
//Vitesse = 0 par défaut
//5 méthodes toutes de type PUBLIC
//La 1ère affiche la couleur
//La 2ème modifie la couleur
//La 3ème permet d'accélérer en utilisant l'attribut vitesse (vitesse++)
//La 4ème affiche le compteur qui retourne l'attribut vitesse
//La 5ème affiche la puissance
//À faire :
// Afficher la couleur
// Modifier la couleur
// Afficher la couleur
// Afficher la puissance
// Afficher le compteur
// Incrémenter la vitesse
// Incrémenter la vitesse
// Incrémenter la vitesse
// Afficher le compteur

class Voiture
{
    private $couleur='bleu';
    private $vitesse=0;
    private $puissance='6cv';

    public function affichageCouleur(){
        return $this->couleur;
    }

    public function modifierCouleur($newCouleur){
        $this->couleur=$newCouleur;
    }

    public function affichageCompteur(){
        return $this->vitesse;
    }

    public function modifierVitesse(){
        $this->vitesse++;
    }

    public function affichagePuissance(){
        return $this->puissance;
    }

}
$citadine = new Voiture();
echo 'Couleur Initiale : ';
echo $citadine->affichageCouleur().'<br />';
$citadine->modifierCouleur('blouge');
echo 'Nouvelle couleur : ';
echo $citadine->affichageCouleur().'<br />';
echo 'Puissance : ';
echo $citadine->affichagePuissance().'<br />';
echo 'Compteur : ';
echo $citadine->affichageCompteur().'<br />';
$citadine->modifierVitesse();
$citadine->modifierVitesse();
$citadine->modifierVitesse();
echo 'Compteur : ';
echo $citadine->affichageCompteur().'<br />';
