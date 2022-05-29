<!-- Boucle FOR
Diviser chaque valeur de 1 à 20 par 5
Si reste de la division par 5 = 0 alors afficher toutes les valeurs sauf les multiples de 5
Utiliser CONTINUE -->
<?php
for($i=1;$i<=20;$i++){
    $reste=$i%5;
    if($reste==0){
        continue;
    }
    echo($i."&nbsp;");
}
?>