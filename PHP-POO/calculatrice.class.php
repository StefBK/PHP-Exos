<?php

class Calculatrice
{
    private $valeur1;
    private $valeur2;
    private $ope;
    
    public function __construct(){
        $this->valeur1;
        $this->valeur2;
        $this->ope;
    }

    public function __destruct(){
        
    }

    public function addition($val1,$val2){
        return $this->total=$val1+$val2;
    }

    public function soustraction($val1,$val2){
        return $this->total=$val1-$val2;
    }

    public function multiplication($val1,$val2){
        return $this->total=$val1*$val2;
    }

    public function division($val1,$val2){
        return $this->total=$val1/$val2;
    }

}