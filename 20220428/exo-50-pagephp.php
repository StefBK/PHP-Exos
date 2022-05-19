<?php
    session_start();
    if($_SESSION['acces']!="oui"){
        header("Location:exo-50.php");
    }else{
        echo "Bonjour Cher(Chère) Client(e) ".$_SESSION['nom']."<br/>";
        if(isset($_SESSION['php'])){
            $_SESSION['php']++;
        }else{
            $_SESSION['php']=0;
        }
    }
    echo"<a href='exo-50.php'>PAGE D'ACCUEIL</a><br/>";
    if(isset($_SESSION['php'])) echo "vue ".$_SESSION['php']." fois";
    echo"<a href='exo-50-pagehtml.php'>PAGE HTML</a>";
?>