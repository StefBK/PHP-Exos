<!-- Création d'une fonction -->
<?php
    function connexbase($base,$param){
        require_once($param.".inc.php");
        // Instanciation d'un objet mysqli (c'est-à-dire des MÉTHODES et des PROPRIÉTÉS)
        $idcom=new mysqli(HOST,USER,PASS,$base);
        if(!$idcom){
            echo"<script>alert('Connexion Impossible à la Base Magasin');</script>";
            exit;
        }else{
            echo("Connexion à la Base Magasin réussie !");
        }
        return $idcom;

    }
?>