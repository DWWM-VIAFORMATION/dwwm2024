<?php
declare(strict_types=1);
namespace app\entities;
class Livre 
 // Vous devez inclure le fichier contenant la classe Auteur si vous en avez besoin
{

    // Propriétés de la classe Livre
    private string $_titre;
    private string $_isbn;
    private int $_dateDeSortie;
    private string $_resume;
    private \ArrayObject $_auteurs;

    // Constructeur de la classe Livre
    public function __construct(string $titre, string $isbn, int $dateDeSortie, string $resume)
    {
        $this->_titre = $titre;
        $this->_isbn = $isbn;
        $this->_dateDeSortie = $dateDeSortie;
        $this->_resume = $resume;
    }

    // Getter et Setter pour le titre
    public function getTitre(): string
    {
        return $this->_titre;
    }
    public function setTitre(string $titre): void
    {
        $this->_titre = $titre;
    }

    // Getter et Setter pour l'ISBN
    public function getIsbn(): string
    {
        return $this->_isbn;
    }
    public function setIsbn(string $isbn): void
    {
        $this->_isbn = $isbn;
    }

    // Getter et Setter pour la date de sortie
    public function getDateDeSortie(): int
    {
        return $this->_dateDeSortie;
    }
    public function setDateDeSortie(int $dateDeSortie): void
    {
        $this->_dateDeSortie = $dateDeSortie;
    }

    // Getter et Setter pour le résumé
    public function getResume(): string
    {
        return $this->_resume;
    }
    public function setResume(string $resume): void
    {
        $this->_resume = $resume;
    }
    public function getauteurs():\ArrayObject
    {
        return $this->_auteurs;
    }

    public function ajouterAuteur(\ArrayObject $auteurs):void
    {
        $this->_auteurs->append($auteurs) ;
    }

}
?>
