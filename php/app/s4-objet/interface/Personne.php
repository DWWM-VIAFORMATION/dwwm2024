<?php declare(strict_types=1);

class Personne implements IEchoable
{
    use Jsonable;
    public string $_prenom;
    public string $_nom;
    private DateTimeImmutable $_date;
    private string $_numeroTelephone;
    public function __construct(string $pPrenom="John",string $pNom="DOE",/*DateTimeImmutable $pDate*/string $pDate ="1977-10-24",string $pNumeroTelephone="0763955555") {
        $this->_prenom = $pPrenom;
        $this->_nom = strtoupper($pNom);
        //$this->_date = $pDate;
        $this->_date = new DateTimeImmutable($pDate);
        $this->_numeroTelephone=$pNumeroTelephone;
    }
    /**
     * GETTERS: méthode qui permettent de lire un attribut de l'objet à l'extérieur en passant par une instance existante de l'objet.
     * ON PEUT LIRE LA VALEUR DES ATTRIBUTS
     * On est pas obligé de rendre possible la lecture de TOUS les attributs
     */
    public function getNom():string
    {
        // on peut imaginer ici par exemple ecrire dans un fichier LOG (historique) du serveur que tel utilisateur a accédé à l'information à telle date.
        return $this->_nom;
    }
    public function getPrenom():string
    {
        return $this->_prenom;
    }
    public function getDate():DateTimeImmutable
    {
        return $this->_date;
    }
    public function getDateFrance():string
    {
        return $this->_date->format('d-m-Y');
    }
    public function getNumeroTelephone():string
    {
        return (substr($this->_numeroTelephone,0,2).'*********'.substr($this->_numeroTelephone,8));
    }
    /**
     * SETTERS: methode qui permet de modifiezr un attribut privé de l'objet depuis l'extérieur en passant par une instance de cet obket.
     * ON PEUT CHANGER LA VALEUR DES ATTRIBUTS.
     * On est pas obligé de rendre possible l'écriture sur tous les attributs.
     */
    public function setNom(string $pNom)
    {
        $this->_nom = strtoupper($pNom);
    }
    public function setPrenom(string $pPrenom)
    {
   
        $this->_prenom = $pPrenom;
    }
    public function __toString():string
    {
        // return "objet de la classe[".get_class($this)."]";
        // return json_encode($this); attribut privé n'affiche rien
        return '{"prenom":"'.$this->_prenom.'","nom":"'.$this->_nom.'"}';
    }
    public function echo()
    {
        echo "echo:".$this->_prenom;
    }
}