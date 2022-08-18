<?php
// S'il n'y a que du PHP, on ne ferme pas la balise
// Autre syntaxe d'ouverture de balise : <?=

// Pour créer une classe
class Tester
// En PascalCase
//Accolades en dessous
{
    //Définition d'un attribut (variable classique en procédural, visibilité publique par défaut, autres visibilités = private (accès de l'intérieur de la classe) ou protected) :
    //$valeur='test';
    //Quand on définit la visibilité d'un attribut = Encapsulation
    //Durée de vie d'une variable = visibilité EN POO ou portabilité en PROC
    public $valeur = 'test';
}
//Pour accéder à l'attribut, on instancie un objet (création d'une instanciation pour accéder à toutes les méthodes de la classe) :
$chaine = new Tester();
//Affichage de la variable qui est une instance de la classe Tester :
//Ne fonctionne pas (procédural)
//echo $chaine;
//Pour avoir accès à tous les membres d'uns classe NEC syntaxe suivante (objet) :
echo $chaine->valeur;
// Si on passe l'attribut en PRIVATE, on ne peut plus y accéder
//Pour manipuler des objets de type PRIVATE en dehors de la classe, on utilise une méthode
