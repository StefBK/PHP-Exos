<?php

//MÉTHODES & ATTRIBUTS STATIQUES :
//Accéder aux membres d'une classe sans l'instancier par un objet

//1°) MÉTHODE AVEC INSTANCIATION :
// class Facture
// {

//     const TVA=20;

//     public function montantTtc($ht){
//         return $ht*(1+self::TVA/100);
//     }
// }

// $resultat=new Facture;
// echo $resultat->montantTtc(1000);

//2°) MÉTHODE SANS INSTANCIATION :
// class Facture
// {

//     const TVA=20;

    //On rajoute "static" avant "function"
//     public static function montantTtc($ht){
//         return $ht*(1+self::TVA/100);
//     }
// }

//echo Facture::montantTtc(1000);

//3°)MÉTHODE SANS INSTANCIATION (SUITE) :
class Facture
{

    const TVA=20;
    private static $_att;

    public function __construct(){
        //$this->_att="POO";
        //=>
        self::$_att="POO";
    }

    public function __destruct(){
    
    }

    public static function montantTtc($ht){
        return $ht*(1+self::TVA/100);
    }

    public function affichageAttribut(){
        //return $this->_att;
        //=>
        return self::$_att;
    }

    public function modifierAttribut($val){
        //Modification de l'attribut statique :
        self::$_att=$val;
    }

}

$objet=new Facture;
echo $objet->affichageAttribut().'<br/>';

$objet2=new Facture;
echo $objet2->modifierAttribut('POO en PHP').'<br/>';
echo $objet2->affichageAttribut().'<br/>';
//Change également la valeur de l'attribut car de type statique donc agira sur tous les objets instanciés même si chaque objet a ses propres valeurs
//Si l'attribut n'avait pas été de type STATIC, le 1er objet n'aurait pas été modifié et l'attribut de l'objet aurait toujours la valeur 'POO' alors que celui de l'objet2 a la valeur 'POO en PHP'
echo $objet->affichageAttribut().'<br/>';
