<?php

//CONSIGNES :
//Création de 3 attributs PRIVATE :
//nom
//age
//sexe
//Création d'un CONSTRUCTEUR sans passage de param par valeur
//Création d'un DESTRUCTEUR
//Méthode GET pour les 3 attributs
//Méthode SET pour les 3 attributs avec PPV
//Création et affichage de 2 objets avec instanciation

class Personne
{
    private $nom;
    private $age;
    private $sexe;
    
    public function __construct(){
        $this->nom;
        $this->age;
        $this->sexe;
    }

    public function __destruct(){
        
    }

    public function setPersonne($nom,$age,$sexe){
        $this->nom=$nom;
        $this->age=$age;
        $this->sexe=$sexe;
    }

    public function getPersonne(){
        return $this->nom.'<br />'.$this->age.'<br />'.$this->sexe.'<br /><hr />';
    }
}

$cpte1=new Personne;
$cpte1->setPersonne('Stef',51,'Femme');
echo $cpte1->getPersonne().'<br />';

$cpte2=new Personne;
$cpte2->setPersonne('Caca',22,'Homme');
echo $cpte2->getPersonne().'<br />';
