<?php

class Personne
{
    private $nom;
    private $age;
    private $sexe;
    
    //Variante de l'exercice avec PPV sans SETTER & GETTER
    public function __construct($nom, $age, $sexe){
        $this->nom=$nom;
        $this->age=$age;
        $this->sexe=$sexe;
    }

    public function __destruct(){
        
    }

    //La méthode magique toString renvoie sous forme de chaîne de caractères tous les attributs initialisés à partir du CONSTRUCTEUR
    public function __toString(){
        $txt="";
        $txt.="Bonjour, c'est moi ".$this->nom."<br/>";
        $txt.="Mon âge est de : ".$this->age."an(s) <br/>";
        //Utilisation d'un opérateur ternaire avec booléen (sinon $this->sexe='Homme')
        $txt.=($this->sexe)? "Je suis un Homme !":"Je suis une Femme !<br />";
        return $txt;
    }
}

$cpte1=new Personne('Stef',51,false);
echo $cpte1;
echo '<hr />';

$cpte2=new Personne('Caca',22,true);
echo $cpte2;
echo '<hr />';

