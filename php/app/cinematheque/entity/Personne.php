<?php
declare(strict_types=1);
namespace cinema\entities;

class Personne
{   private string $_nom;
    private string $_prenom;
    
    public function getNom(): string
    {
        return $this->_nom;
    }
    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    public function setNom(string $nom): void
    {
        $this->_nom = $nom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->_prenom = $prenom;
    } 
    public function __construct(String $nom, string $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }
}