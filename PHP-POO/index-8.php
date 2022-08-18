
<?php

//HÉRITAGE : REDÉFINITION OU SURCHARGE DE MÉTHODE
//Surcharge = Quand on donne le même nom aux méthodes dans la Mère et dans la Fille
//Dans la pratique, on crée 1 Classe par fichier et on utilise des Require pour les Héritages

abstract class Mere
{
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
    public function methode1(){
        //En plus : $str=Mere::methode1();
        //Ainsi qu'un point de concaténation à la 2ème ligne $str (".=" et non pas "=" qui écrase)
        $str=Mere::methode1();
        //Ne fonctionne pas sans le point de concaténation :
        //N'affiche que "Bonjour, je suis la Classe Fille
        //$str=$this->attribut;
        $str.=$this->attribut;
        $str.=", je suis la classe Fille";
        return $str;
    }
}

// $objet=new Mere;
// echo $objet->methode1().'<br/>';
//Ne pas instancier si Héritage, sinon Héritage ne sert à rien

$objet2=new Fille;
echo $objet2->methode1().'<br/>';
//Pour Afficher l'information de la Classe Mère : Rajouter une information dans la Méthode de la Classe Fille