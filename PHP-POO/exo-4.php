<?php

//CONSIGNES :
//Formulaire saisie d'une valeur STR avec un champ ENVOYER
//Modifier la valeur d'un attribut avec un SETTER
//Méthode POST
//Formulaire renvoi vers la même page (SELF)

class Data
{
    private $valeur;
    
    public function __construct(){
        $this->valeur;
    }

    public function __destruct(){
        
    }

    public function setData($recup){
        $this->valeur=$recup;
    }

    public function getData(){
        return $this->valeur.'<br /><hr />';
    }
}
?>
<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8"/>
        <title>PHP POO</title>
    </head>
    <body>
        <section>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <label>VALEUR</label>
                <input type="text" name="val" placeholder="Saisir votre texte" maxlength="10" required />
                <input type="submit" name="envoyer" value="ENVOYER" />
            </form>
            <?php
            if(isset($_POST['envoyer'])){
                $texte=$_POST['val'];
                $traitement=new Data;
                $traitement->setData($texte);
                echo "Valeur Saisie : ".$traitement->getData().'<br />';
            }
            ?>
        </section>
    </body>
</html>>
