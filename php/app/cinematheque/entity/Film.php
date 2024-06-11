<?php
declare(strict_types=1);

//association/film.php 
namespace cinema\entities;
class Film implements \cinema\entities\IAffichable
{
    private string $_titre;
    private Realisateur $_realisateur; // Association avec un Realisateur 
    private \ArrayObject $_acteurs; // Association avec plusieurs Acteurs 
    public function __construct(string $titre, Realisateur $realisateur, \ArrayObject $acteurs=new \ArrayObject())
    {
        $this->_titre = $titre;
        $this->_realisateur = $realisateur;
        $this->_acteurs = $acteurs;
    }
    public function ajouterActeur(Acteur $acteur)
    {
        $this->_acteurs->append($acteur);
    }
    public function afficherString(): string
    {
        $resultat= "Film: " . $this->getTitre() . "\nRealisateur: " . $this->_realisateur->getPrenom() . " " . $this->_realisateur->getNom() . "\n Acteurs:\n";
        foreach ($this->_acteurs as $acteur) {
            $resultat.= "- " . $acteur->getPrenom() . " " . $acteur->getNom() . "\n";
        }
        return $resultat;
    }
    public function afficherJson():string
    {
        return json_encode($this);
    }
    private function getTitre():string
    {
        return $this->_titre;
    }
    public function setTitre(string $ptitre):void
    {
        $this->_titre = $ptitre;
    }
    public function getRealisateur():Realisateur
    {
        return $this->_realisateur;
    }
    public function setRealisateur(Realisateur $pReal)
    {
        $this->_realisateur = $pReal;
    }
    public function getActeurs():\ArrayObject
    {
        return $this->_acteurs;
    }
    public function supprimerActeurByKey(int $acteurKey): void
    {
        $this->_acteurs->offsetUnset($acteurKey);
    }
    public function supprimerActeurByTitre(string $searchedName): void
    {
        if (strlen($searchedName) >= 3) {
            foreach ($this->_acteurs as $key => $film) {
                if (str_contains($film->getTitre(),$searchedName))
                    $this->_acteurs->offsetUnset($key);
            }
        }
    }
}