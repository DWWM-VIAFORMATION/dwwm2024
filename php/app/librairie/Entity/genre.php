<?php
declare(strict_types=1);
namespace app\entities;
class Genre{
    //  Listes des attributs.
    private string $_intitule;
    private ArrayObject $_listeLivres;

    //  Le constructeur qui est appellé avec new.
    public function __construct(string $intitule){
        $this->_intitule=$intitule;
    }
    // Liste des Getters.
    public function getGenre():string{
        return $this->_intitule;
    }
    public function getListeLivre():ArrayObject{
        return $this->_listeLivres;
    }
    //  Manipulation de tableau.
    public function ajouterLivres(Livre $livre):void
    {
        $this->_listeLivres->append($livre);
    }
}

?>