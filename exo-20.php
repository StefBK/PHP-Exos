<!-- Texte de Bienvenue suivant la langue
H1 qui change suivant la langue
Si FR=>Bienvenue
Si UK=>Welcome
Si IT=>Benvenuti
Sinon, on ne connaît pas la langue
Champ ou variable en dur $langue="FR"; -->
<!-- Avec switch(variable){
    case X:
        instruction;
        break;
    ...
} -->

<!-- PHP -->
<?php 
switch("FR"):
    case "EN":
?>
    <!-- HTML -->
    <h1>Welcome in France</h1>
    <!-- PHP -->
    <?php break; ?>
<?php case "SP": ?>
    <!-- HTML -->
    <h1>Bienvenido en Francia</h1>
    <!-- PHP -->
    <?php break; ?>
<?php case "FR": ?>
    <!-- HTML -->
    <h1>Bienvenue en France</h1>
    <!-- PHP -->
    <?php break; ?>
<?php default: ?>
    <!-- HTML -->
    <h1>Langue Inconnue !</h1>
    <?php endswitch ?>    