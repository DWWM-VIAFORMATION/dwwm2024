<?php
class Livre {
    private string $_titre;
    private Auteur $_auteur;

    public function __construct(string $titre, Auteur $auteur) {
        $this->_titre = $titre;
        $this->_auteur = $auteur; // L'association est faite ici
    }
    public function getTitre():string
    {
        return $this->_titre;
    }
    public function getAuteur():Auteur
    {
        return $this->_auteur;
    }

}
class Auteur {
    private string $_nom;
    private string $_prenom;
    private ArrayObject $_livres;

    public function __construct(string $nom, string $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = new ArrayObject();
    }
  public function getNom():string
    {
        return $this->_nom;
    }
    public function gePrenom():string
    {
        return $this->_prenom;
    }
    public function ajouterLivre(Livre $livre):void
    {
        $this->_livres->append($livre);
    }
    public function getLivres():ArrayObject
    {
        return $this->_livres;
    }
}
