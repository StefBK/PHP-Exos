
<?php
//INTERFACES :
//Sert à obliger la Classe qui suit d'utiliser TOUTES les méthodes de l'Interface
//En Objet : Signature = Nommage (syntaxe) des Méthodes (avec respect des majuscules, minuscules, etc.)
//Les Méthodes sont déclarées dans l'Interface sans développer les Méthodes. Cela contrôlera les Signatures (règle de nommage en PascalCase ou UpperCamelCase). Le traitement sera géré dans les Classes qui doivent obligatoirement développer TOUTES les méthodes de l'Interface.

interface Test
{
    public function method1();
    public function method2();
    public function method3();
}

Class Cci implements Test
{
    //S'il manque une méthode ou que la signature n'est pas respectée, il y aura un message d'erreur
    public function method1(){
        echo "Appel method1<br/>";
    }

    public function method2(){
        echo "Appel method2<br/>";
    }

    public function method3(){
        echo "Appel method3<br/>";
    }
}