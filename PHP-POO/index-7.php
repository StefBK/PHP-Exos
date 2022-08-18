
<?php

//HÉRITAGE CLASSIQUE : REDÉFINITION OU SURCHARGE DE MÉTHODE


//class Mere
//abstract rend l'héritage obligatoire de la classe Mere dans la classe Fille
//final class Mere aurait interdit l'héritage
abstract class Mere
{
    //private $attribut="Bonjour";
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

class Fille extends Mere
{
    public function methode2(){
    //La fille hérite des méthodes de la classe Mere mais on donne le même nom de méthode que celui de la classe Mere
    //public function methode1(){
        $str=$this->attribut;
        $str.=", je suis la classe Fille";
        return $str;
    }
}

//$objet=new Mere;
//echo $objet->methode1().'<br/>';

$objet2=new Fille;
echo $objet2->methode1().'<br/>';
echo $objet2->methode2().'<br/>';
//=>Bonjour, je suis la classe Mère
//=>Notice: Undefined property: Fille::$attribut in C:\wamp64\www\PHP_DWWM\PHP-POO\index-7.php on line 35
//=>, je suis la classe Fille
//La classe fille ne peut pas hériter de la Classe Mere car l'attribut est en Private
//En passant l'Attribut en Protected il n'y a plus de message d'erreur
//Dès que Héritage, passer les Attributs en Protected au lieu de Private.
