<?php

class Tester
{
    private $valeur = 'test';
    //On crée dans la classe une méthode publique pour pouvoir accéder à la variable à l'extérieur de la classe :
    public function affichageValeur(){
        //Méthodes en camelCase - Classes en PascalCase
        //$this correspond à l'objet $chaine car on ne connaît pas le nom que l'on va lui donner
        //Dans les méthodes les accolades ne sont pas à la ligne
        return $this->valeur;
    }

    public function modifierAffichage($texte){
        $this->valeur=$texte;
    }
}
$chaine = new Tester();
//Ici on fait référence à la méthode affichageValeur :
echo $chaine->affichageValeur().'<br />';
//Un attribut n'est jamais PUBLIC
$chaine->modifierAffichage('DWWM');
echo $chaine->affichageValeur().'<br />';

