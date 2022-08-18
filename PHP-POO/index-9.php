
<?php

//CONTRAINTE :
//Rendre obligatoire l'Héritage : ABSTRACT

//1°) B hérite de A sans aucun problème en obligeant l'héritage avec ABSTRACT :
abstract class A
{
    public function methode(){
        echo "Bonjour";
    }
}

class B extends A
{

}

$objet=new B;
$objet->methode();
//Dès qu'on utilise Abstract, on ne peut plus instancier directement la Classe Mère. On ne peut accéder aux membres de la Classe qu'en Héritage
//$objet2=new A;
//$objet2->methode();
//=>Message d'erreur : Fatal error: Uncaught Error: Cannot instantiate abstract class A in C:\wamp64\www\PHP_DWWM\PHP-POO\index-9.php on line 2
//Pour éviter le message d'erreur, rajouter un $str=A::methode(); ou "parent" au lieu du nom de classe (comme "self" quand on est dans la même Classe) dans la méthode de la Classe B
//Pour ne pas autoriser l'héritage, on utilise "final" au lieu de "abstract" sur la Classe Mère et on supprime "extends <NomClasseMere>" sur la Classe Fille
