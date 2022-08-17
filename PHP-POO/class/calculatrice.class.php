<?php

class Calculatrice
{
    private $valeur1;
    private $valeur2;
    private $total;
    
    public function __construct($valeur1,$valeur2){
        $this->valeur1=$valeur1;
        $this->valeur2=$valeur2;
    }

    public function __destruct(){
        
    }

    public function addition(){
        $this->total=$this->valeur1+$this->valeur2;
        return $this->total;
    }

    public function soustraction(){
        $this->total=$this->valeur1-$this->valeur2;
        return $this->total;
    }

    public function multiplication(){
        $this->total=$this->valeur1*$this->valeur2;
        return $this->total;
    }

    public function division(){
        $this->total=$this->valeur1/$this->valeur2;
        return $this->total;
    }
}