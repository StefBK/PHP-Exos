<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 27</title>
        <link rel="stylesheet" href="css/main27.css" />
    </head>
    <body>
        <h1>Exercice sur la manipulation de données avec intégrité</h1>
        <?php
            $chaine=array('cet été, à la plage ','le bateau jaune et bleu');
            $rechercher=array('été','plage','jaune','bleu');
            $remplacer=array('hiver','montagne','rose','violet');
            $avant='';
            $apres='';
            foreach($chaine as $indice => $valeur){
                $avant.=$valeur;
                $apres.=str_replace($rechercher,$remplacer,$chaine[$indice]);
            }
            echo("Le texte de départ : ".$avant." devient : ".$apres."<br/>");
        ?>
    </body>
</html>