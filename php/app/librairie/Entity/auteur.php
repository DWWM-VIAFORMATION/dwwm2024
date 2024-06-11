<?php
declare(strict_types=1);
namespace app\entities;

class Auteur{
    private string $_nom;
    private string $_prenom;
    private Pays $_origine;
    private ?\DateTimeImmutable $_DateNaissance;
    private ?\DateTimeImmutable $_DateDeces;
    private bool $_estDecede;
    private \ArrayObject $_livres;

    public function __construct(string $nom, string $prenom, Pays $origine, ?\DateTimeImmutable $pDateNaissance, ?\DateTimeImmutable $pDateDeces, bool $pEstDecede, \ArrayObject $pLivres = new \ArrayObject()){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_origine = $origine;
        $this->_DateNaissance = $pDateNaissance;
        $this->_DateDeces = $pDateDeces;
        $this->_estDecede = $pEstDecede;
        $this->_livres = $pLivres;
    }
    public function getOrigine():Pays
    {
        return $this->_origine;
    }
    public function getNom():string
    {
        return $this->_nom;
    }
    public function getPrenom():string
    {
        return $this->_prenom;
    }
    public function getDateNaissance():?string
    {
        return $this->_DateNaissance ? $this->_DateNaissance->format('Y/m/d') : null;
    }
    public function getDateDeces():?string
    {
        return $this->_DateDeces ? $this->_DateDeces->format('Y/m/d') : null;
    }
    public function estDecede():bool
    {
        return $this->getDateDeces() !== null;
    }
    public function getLivre()
    {
        return $this->_livres;
    }
    public function ajouterLivre(Livre $livre)
    {
       $this->_livres->append($livre);
    }
}