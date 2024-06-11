<?php
require_once 'vehicule.php';
require_once 'voiture.php';

$maVoiture = new garage\Voiture("Toyota");
$maVoiture->demarrer();  // Affiche "La voiture Toyota démarre."
