<?php
namespace app\zoo;
abstract class Animal
{
    protected string $nom;
    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public  function recevoirNom($nom){
        $this->nom = $nom;
    }
    public abstract function crier();

}