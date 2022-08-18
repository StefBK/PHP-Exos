<?php

//CONSTANTES :

class Stagiaire
{
    //Attribut en Objet (variable objet qu'on va instancier) différencié d'une variable avec un underscore avant
    private $_nom;
    //Création d'une constante obligatoirement en MAJUSCULES toujours à l'extérieur d'un CONSTRUCTEUR
    //Pour faire appel à une CONSTANTE à l'extérieur d'une classe, NEC un opérateur de résolution de portée avec la syntaxe "::"
    const ECOLE='CCI DRÔME';
    
    public function __construct(){
        $this->_nom;
    }

    public function __destruct(){

    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getNom(){
        return $this->_nom;
    }
}

//Création d'une variable apprenant et instanciation de la classe Stagiaire pour avoir accès aux attributs et méthodes de la classe
$apprenant=new Stagiaire;
$apprenant->setNom('Stef');
echo $apprenant->getNom().'<br/>';
//"::" pour faire appel à la CONSTANTE "ECOLE"
echo $apprenant::ECOLE."<br/>";
//Ou avec le nom de la classe
echo Stagiaire::ECOLE;
echo '<br/>';
echo "L'école de : ".$apprenant->getNom(). " est sur : ". Stagiaire::ECOLE;
