<?php
declare(strict_types=1);
//association/realisateur.php 
namespace cinema\entities;
use \cinema\entities\Personne as Personne;
use \cinema\entities\IAffichable as IAffichable;
class Realisateur extends Personne implements IAffichable
{

    private ?\ArrayObject $_listeFilms;
    public function __construct(string $nom, string $prenom, \ArrayObject $listeFilms = new \ArrayObject())
    {
        parent::__construct($nom,$prenom);
        $this->_listeFilms = $listeFilms;
    }

    

    public function ajouterFilms(Film $film): void
    {
        $this->_listeFilms->append($film);
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