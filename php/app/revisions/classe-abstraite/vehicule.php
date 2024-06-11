<?php
namespace garage;
abstract class Vehicule {
    protected $marque; // private empêcherait aux classes enfants d'accéder à l'attribut!

    public function __construct($marque) {
        $this->marque = $marque;
    }
    abstract public function demarrer();
}