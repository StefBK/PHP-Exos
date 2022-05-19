<?php
    session_start();
    if($_SESSION['acces']!="oui"){
        header("Location:exo-50.php");
        // Faire un EXIT dès que HEADER
        exit();
    }else{
        echo "Bonjour Cher(Chère) Client(e) ".$_SESSION['nom']."<br/>";
        if(isset($_SESSION['html'])){
            $_SESSION['html']++;
        }else{
            $_SESSION['html']=0;
        }
    }
    echo"<a href='exo-50.php'>PAGE D'ACCUEIL</a><br/>";
    if(isset($_SESSION['html'])) echo "vue ".$_SESSION['html']." fois";
    echo"<a href='exo-50-pagephp.php'>PAGE PHP</a>";
?>