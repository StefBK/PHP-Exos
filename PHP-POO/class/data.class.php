<?php

//CONSIGNES :
//Variante en mettant la classe dans un autre fichier

//Nom du fichier = <Nom de la classe (en minuscules)>.class.php 
class Data
{
    private $valeur;
    
    public function __construct(){
        $this->valeur;
    }

    public function __destruct(){
        
    }

    public function setData($recup){
        $this->valeur=$recup;
    }

    public function getData(){
        return $this->valeur.'<br /><hr />';
    }
}