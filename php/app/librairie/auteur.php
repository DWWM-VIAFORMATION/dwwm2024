<?php
declare(strict_types=1);
class Auteur{
    private string $_nom;
    private string $_prenom;
    private Pays $_origine;
    private ?DateTimeImmutable $_DateNaissance;
    private ?DateTimeImmutable $_DateDeces;
    public bool $estDecede;

    public function __construct(string $nom, string $prenom, Pays $origine, ?DateTime $pDateNaissance, ?DateTime $pDateDeces, bool $pEstDecede){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_origine = $origine;
        $this->_DateNaissance = $pDateNaissance;
        $this->_DateDeces = $pDateDeces;
        $this->estDecede = $pEstDecede;
    }
    public function getOrigine():string
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
    public function getDateNaissance():string
    {
        return $this->_DateNaissance;
    }
    public function getDateDeces():string
    {
        return $this->_DateDeces;
    }
    public function estDecede():bool
    {
        return $this->getDateDeces() !== null;
    }
    public function ajouterLivre(Livre $livre)
    {
        $this->livres[] = $livre;
    }
}