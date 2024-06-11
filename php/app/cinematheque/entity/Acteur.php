<?php
declare (strict_types=1);
namespace cinema\entities;

// association/acteur.php 
class Acteur extends Personne implements \cinema\entities\IListable
{
    private String $_nom;
    private String $_prenom;
    private ?\ArrayObject $_listeFilms;
    public function __construct(String $pNom, String $pPrenom, \ArrayObject $listeFilms = new \ArrayObject())
    {
        $this->_nom = $pNom;
        $this->_prenom = $pPrenom;
        $this->_listeFilms = $listeFilms;
    }
    public function setNom($pNom):void{
        $this->_nom=$pNom;
    }
    public function setPrenom($pPrenom):void{
        $this->_prenom=$pPrenom;
    }
    public function getNom():String{
        return $this->_nom;
    }
    public function getPrenom():String{
        return $this->_prenom;
    }
    public function supprimerFilmByKey(int $filmKey): void
    {
        $this->_listeFilms->offsetUnset($filmKey);
    }
    public function supprimerFilmByTitre(string $searchedTitre): void
    {
        if (strlen($searchedTitre) >= 3) {
            foreach ($this->_listeFilms as $key => $film) {
                if (str_contains($film->getTitre(),$searchedTitre))
                    $this->_listeFilms->offsetUnset($key);
            }
          
        }
    }
    public function afficherString():string
    {
        return $this->getPrenom()." ".$this->getNom();
    }
    public function afficherJson():string
    {
        return json_encode($this);
    }
}
