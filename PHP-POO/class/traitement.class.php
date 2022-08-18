<?php

class Traitement
{
    private $chaine;
    private $long;
    
    public function __construct(){
        $this->chaine;
        $this->long;
    }

    public function __destruct(){
        
    }

    public function setChaine($string){
        $this->chaine=$string;
    }

    public function getChaine(){
        return $this->chaine.'<br /><hr />';
    }

    public function chartA($pos){
        return substr($this->chaine,$pos,1);
    }

    public function longueur(){
        return $this->long=strlen($this->chaine);
    }

    public function substring($deb,$fin){
        return substr($this->chaine,$deb,$deb-$fin+1);
    }

    public function upper(){
        return strtoupper($this->chaine);
    }

    public function lower(){
        return strtolower($this->chaine);
    }
}