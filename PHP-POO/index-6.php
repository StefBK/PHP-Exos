
<?php

//HÉRITAGE : On veut que la classe Fille hérite des informations de la classe Mere


class Mere
{
    //private $attribut="Bonjour";
    //=>
    protected $attribut="Bonjour";

    public function __construct(){
        $this->attribut;
    }

    public function __destruct(){
    
    }
    
    public function methode1(){
        $str=$this->attribut;
        $str.=", je suis la classe Mère";
        return $str;
    }
}

//class Fille
//=>
//En PHP, une classe fille ne peut hériter que d'une classe
//Pour pouvoir hériter de plusieurs classes, on utilise les TRAITS

class Fille extends Mere
{
    public function methode2(){
        $str=$this->attribut;
        $str.=", je suis la classe Fille";
        return $str;
    }
}

$objet=new Mere;
echo $objet->methode1().'<br/>';

$objet2=new Fille;
echo $objet2->methode2().'<br/>';