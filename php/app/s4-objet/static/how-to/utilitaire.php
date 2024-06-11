<?php
class Auteur {
    private $_nom;
    private $_prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom():string
    {
        return $this->_nom;
    }
    public function gePrenom():string
    {
        return $this->_prenom;
    }
}

class Livre {
    private $_titre;
    private $_auteur;

    public function __construct($titre, $auteur) {
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
$auteur = new Auteur("Hugo", "Victor");
$livre = new Livre("Les Misérables", $auteur);

echo $livre->getAuteur()->getPrenom(); // Affiche "Victor"

class Voiture {
    public string $marque;
    public string $modele;
    public int $vitesse;
    
    public function __construct(string $marque,string $modele,int $vitesse) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse = $vitesse;
    }
    public function afficherDetails() {
        echo "Marque: " . $this->marque . ", Modèle: " . $this->modele;
    }
}
$maVoiture = new Voiture("Toyota", "Corolla",160);
$maVoiture->afficherDetails(); // Affiche "Marque: Toyota, Modèle: Corolla"

class CompteBancaire {
    private float $_solde;
    
    public function __construct(float $soldeInitial) {
        $this->_solde = $soldeInitial;
    }
    public function getSolde():float {
        return $this->_solde;
    }

    public function setSolde(float $solde) {
        if ($solde >= 0) {
            $this->_solde = $solde;
        } else {
            echo "Le solde ne peut pas être négatif.";
        }
    }
}
$compte = new CompteBancaire(1000);
echo $compte->getSolde(); // 1000
$compte->setSolde(500); // Modifie le solde
$compte->_solde = 50;// ne fonctionne pas!


