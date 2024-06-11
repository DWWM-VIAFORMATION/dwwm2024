<?php
// Enable strict types to catch types error early (in compile-time in stead of runtime)
declare(strict_types=1);

// Organize the entity in a logical way. Avoids name collisions.
namespace app\entities;

class Livre
{
  // All attributes are private.
  private string $_titre;
  private int $_dateSortie;
  private string $_isbn;
  private string $_resume;

  public function __construct(string $titre, int $dateSortie, string $isbn, string $resume)
  {
  $this->_titre = $titre;
  $this->_dateSortie = $dateSortie;
  $this->_isbn = $isbn;
  $this->_resume = $resume;
  }

  // Getters and setters
  public function getTitre(): string
  {
    return $this->_titre;
  }

  public function getDateSortie(): int
  {
    return $this->_dateSortie;
  }
  
  public function setLargeur(int $largeur): void
  {
    if ($largeur > 0) {
      $this->_largeur = $largeur;
    } else {
      echo 'Please enter a positive integer!';
    }
  }

  public function getIsbn(): string
  {
    return $this->_isbn;
  }
  public function setIsbn(string $_isbn): void
  {
    if ((strlen($this->_isbn) === 10) || (strlen($this->_isbn) === 13))
  }


  public function getResume(): string
  {
    // Defensive programming. Check either it's empty or not.
    if (!empty($this->_resume)) {
      return $this->_resume;  // early return: the rest of the expression in the function's body will NOT be evaluated.
    }
    return 'No resume yet.';
  }
}
//le livre  Mal
//Mallo Copyright
// $livre_prefere_de_mallo = new \app\entities\Livre('war and peace', 1876, 'kjefgjerg54584', 'must read)';)
?>
