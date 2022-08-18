<?php

class MontantTtc
{
    private $_ht;
    private $_mtva;
    private $_ttc;

    const TVA=20;
    
    public function __construct(){
        $this->_ht;
        $this->_mtva;
        $this->_ttc;
    }

    public function __destruct(){
        
    }

    public function setHt($montantht){
        $this->_ht=$montantht;
    }

    public function getHt(){
        return $this->_ht;
    }

    public function setMtva(){
        return $this->_mtva=$this->_ht*(self::TVA/100);
    }

    public function setTtc(){
        return $this->_ttc=$this->_ht+$this->_mtva;
    }
}