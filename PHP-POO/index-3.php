<?php

//SETTER & GETTER :

class Cours
{
    private $cours;
    private $prix;
    
    //Dans le CONSTRUCTEUR : Commun à tous les objets
    public function __construct(){
        $this->cours;
        $this->prix;
    }

    public function __destruct(){
        
    }

    public function setCours($modifierCours){
        $this->cours=$modifierCours;
    }

    public function getCours(){
        return $this->cours;

    }
}

//Parenthèses de la classe non obligatoires
$cursus=new Cours;
$cursus->setCours('PHP');
echo $cursus->getCours();
