<?php
namespace garage;
class Voiture extends Vehicule {
    public function demarrer() {
        echo "La voiture " . $this->marque . " démarre.";
    }
}