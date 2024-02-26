<?php
namespace decouverte;
class Personne{
    public string $prenom;
    public string $nom;
    public \ArrayObject $stagiaires;
    public Personne $formateur;
    public function __construct(string $prenom="Jane",string $nom="DOE") {
        $this->prenom =$prenom;
        $this->nom = $nom;
        $this->stagiaires = new \ArrayObject();
    
    }
    public function saluer():string
    {
        return "SALUT ".$this->prenom;
    }
    public function ajoutStagiaire(Personne $stagiaire)
    {
        $this->stagiaires->append($stagiaire);
        $stagiaire->formateur=$this;
    }
}