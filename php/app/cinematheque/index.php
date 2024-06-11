<?php
require_once 'vendor/autoload.php';
use cinema\entities\Film as Film;
use cinema\entities\Acteur as Acteur;
use cinema\entities\Realisateur as Realisateur;
 
$realisateur = new Realisateur("Quentin", "Tarantino"); 
$acteur1 = new Acteur("John", "Travolta"); 
$acteur2 = new Acteur("Uma", "Thurman"); 

$film = new Film("Pulp Fiction", $realisateur); 
$film->ajouterActeur($acteur1); 
$film->ajouterActeur($acteur2); 
echo $film->afficherString(); 
echo $acteur1->afficherString(); 
echo $realisateur->afficherString();