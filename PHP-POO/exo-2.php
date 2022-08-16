<?php

//CONSIGNES :
//Attributs de type PRIVATE :
//nom (string),class (string),attaque (integer),pv (integer),forcegeek (booléen)
//1°) L'initialisation doit se faire à partir du CONSTRUCTEUR en passage de valeur (toutes les variables entre parenthèses)
//2°) Création d'une méthode calcul dégât : pv/100*attaque
//3°) Création d'une méthode afficher dégât : "Dégâts infligés : On fait référence à la méthode calcul dégât"
//4°) On doit créer 4 objets et afficher les dégâts suivant les valeurs initiées à l'instanciation

class Personnage
{
    private $nom;
    private $class;
    private $attaque;
    private $pv;
    private $forcegeek;

    public function __construct($nom,$class,$attaque,$pv,$forcegeek){
        $this->nom=$nom;
        $this->class=$class;
        $this->attaque=$attaque;
        $this->pv=$pv;
        $this->forcegeek=$forcegeek;
    }

    public function __destruct(){

    }

    public function affichagePersonnage(){
        echo 'Votre personnage : <br />';
        echo 'Nom du personnage : '.$this->nom.'<br />';
        echo 'Classe du personnage : '.$this->class.'<br />';
        echo 'Attaque du personnage : '.$this->attaque.'<br />';
        echo 'PV du personnage : '.$this->pv.'<br />';
        echo 'ForceGeek du personnage : '.$this->forcegeek.'<br />';
    }

    public function calculDegats(){
        return $this->pv/100*$this->attaque;
    }

    public function affichageDegats(){
        //echo $this->initial='Calcul des Dégâts Occasionnés : '.'<br />';
        echo 'Dégâts Occasionnés : '.$this->calculDegats().'<br />';
    }
}

$fight1= new Personnage('Stef','Guerrière','1000','5',true);
$fight1->affichagePersonnage().'<br />';
echo '<br />';
$fight1->affichageDegats().'<br />';
echo '<hr />';

$fight2= new Personnage('Mosquito','Bouffon','800','3',true);
$fight2->affichagePersonnage().'<br />';
echo '<br />';
$fight2->affichageDegats().'<br />';
echo '<hr />';

$fight3= new Personnage('Caca','Elfe','600','4',false);
$fight3->affichagePersonnage().'<br />';
echo '<br />';
$fight3->affichageDegats().'<br />';
echo '<hr />';

$fight4= new Personnage('Dan','Guerrier','800','1',false);
$fight4->affichagePersonnage().'<br />';
echo '<br />';
$fight4->affichageDegats().'<br />';
echo '<hr />';
