<?php

class Legumes
{
    private $_nom;
    private $_prix;
    private $_qte;

    public function __construct(){
        $this->_nom;
        $this->_prix;
        $this->_qte;
    }

    public function __destruct(){
        
    }

    public function setNom($nomLegume){
        $this->_nom=$nomLegume;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function setPrix($prixLegume){
        $this->_prix=$prixLegume;
    }

    public function getPrix(){
        return $this->_prix;
    }

    public function setQte($qteLegume){
        $this->_qte=$qteLegume;
    }

    public function getQte(){
        return $this->_qte;
    }

    public function calculer(){
        return $this->_prix*$this->_qte;
    }
}