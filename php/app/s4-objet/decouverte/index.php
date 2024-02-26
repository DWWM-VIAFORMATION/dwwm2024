<?php
require_once 'personne.php';
$personne1 = ['prenom'=>'Thierry','nom'=>"BRU"];
$personne2 = ['prenom'=>'Steven','nom'=>"BERNEAU"];
$personnes = [$personne1,$personne2];
// $personne3 = ['firstname'=>'Aurélien','lastname'=>"PLAZZOTTA"];
// $personnes[]=$personne3;
var_dump($personnes);
foreach ($personnes as $key => $personne) {
    echo "personne[$key] ".$personne['prenom'];
    # code...
}

$formateur= new decouverte\Personne();

var_dump($formateur);
$formateur->prenom = "Thierry";
$formateur->nom = "BRU";
echo $formateur->prenom." ".$formateur->nom;
$stagiaire = new decouverte\Personne ("Steven","Berneau");
var_dump($stagiaire);
// saluer();
echo "<p>".$stagiaire->saluer()."</p>";
$formateur->ajoutStagiaire($stagiaire);
$formateur->ajoutStagiaire(new decouverte\Personne ("Aurelien","PLAZZOTTA"));
foreach($formateur->stagiaires as $stagiaire){
    echo "<p> ".$stagiaire->saluer()."</p>";
    echo "<p> son formateur est ".$stagiaire->formateur->saluer();
}