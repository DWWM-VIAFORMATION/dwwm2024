<?php
require_once 'personne.php';

// $formateur = new Personne(); ne fonctionne plus une fois le constructeur personnalisé
$formateur = new Personne('Melusine',"Kurtz");
// $formateur->prenom="thierry"; ne fonctionne plus une fois les attributs passés en privé
// $formateur->nom = "BrU";ne fonctionne plus une fois les attributs passés en privé
// $formateur->prenom=42; devient du texte une fois l'attribut typé, ne fonctionne plus une fois les attributs passés en privé


// echo $formateur->_prenom;ne fonctionne plus une fois les attributs passés en privé
echo $formateur->getPrenom();
echo $formateur->setPrenom('Mélusine');
// var_dump($formateur);
echo $formateur->getPrenom();
echo $formateur->getNom();
echo $formateur->getDate()->format('d-m-Y');
echo $formateur->getDateFrance();
echo $formateur->getNumeroTelephone();
var_dump(json_decode($formateur));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$formateur?>
</body>
</html>