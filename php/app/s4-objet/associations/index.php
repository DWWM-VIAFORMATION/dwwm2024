<?php
// association/index.php
// importation des classes!
require_once 'acteur.php';
require_once 'realisateur.php';
require_once 'film.php';

$realisateur = new Realisateur("Quentin", "Tarantino");
$acteur1 = new Acteur("John", "Travolta");
$acteur2 = new Acteur("Uma", "Thurman");

$film = new Film("Pulp Fiction", $realisateur);

$film->ajouterActeur($acteur1);
$film->ajouterActeur($acteur2);

$film->afficherFilm();