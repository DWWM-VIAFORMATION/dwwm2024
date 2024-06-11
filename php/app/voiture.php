<?php
namespace voitures;
class Vehicule {
    public function demarrer() {
        echo "Le véhicule démarre";
    }
}

class Voiture extends Vehicule {
    public function demarrer() {
        parent::demarrer();
        echo " et la voiture a un démarrage spécifique";
    }
}