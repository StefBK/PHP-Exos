<!-- Tableau Associatif : Les INDEX sont du texte (donc NEC FOREACH) -->
<?php
$langage['PHP']=array('Très difficile','Difficile');
$langage['HTML']=array('Très facile','Facile','Newbee++');
$langage['JS']=array('Très difficile','Difficile','Sénior');
?>
<!-- On souhaite l'affichage suivant :
PHP=>Très difficile
PHP=>Difficile
HTML=>Très facile
Etc. -->
<table>
    <?php
        foreach($langage AS $indice=>$valeur){
            foreach($valeur AS $clef=>$val){
                echo("<tr><td>".$indice."=>".$val."</td></tr>");
            } 
        }
    ?>
</table>


