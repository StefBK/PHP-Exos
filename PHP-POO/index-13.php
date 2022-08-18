
<?php
//TRAITS :
//Une Classe Fille ne peut hériter que d'une Mère
//Les Traits permettent d'avoir plusieurs Héritages possibles

//1°) Avec une seule Classe Trait
//Trait est la Classe Mère
//trait Ecole
//{
//     public function apprendre(){
//         echo "J'adore apprendre le PHP ! <br/>";
//     }
// }

// class Apprenant
// {
//     //Le "Use" remplace le "Extends" en Héritage
//     //La Classe Fille Apprenant hérite de la Classe Mère Trait Ecole
//     use Ecole;
// }

// $stagiaire=new Apprenant;
// $stagiaire->apprendre();

//2°) En créant une 2ème Classe Mère :
trait Ecole
{
    public function Apprendre(){
        echo "J'adore apprendre le PHP ! <br/>";
    }
}

trait Entreprises
{
    public function Geolocalisation(){
        echo "Vous êtes situé sur VALENCE, dans la Drôme.<br/>";
    }
}

class Apprenant
{
    //On liste toutes les Classes Trait dans le Use séparées par une virgule
    use Ecole,Entreprises;
}

$stagiaire=new Apprenant;
$stagiaire->Apprendre();
$stagiaire->Geolocalisation();
