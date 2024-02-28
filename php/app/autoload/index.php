<?php
require_once 'vendor/autoload.php';
use entity\Personne as Personne;
$personne = new Personne();
$personne->nom="thierry";
$personne->prenom="thierry";
echo $personne->prenom.", salut!";
