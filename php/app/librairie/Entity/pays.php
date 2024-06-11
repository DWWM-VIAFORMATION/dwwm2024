<?php
declare(strict_types=1);

namespace app\entities;
class Pays
{
    private string $_nomPays;
    private \ArrayObject $_auteurs;

public function __construct(string $nomPays, \ArrayObject $auteurs =new ArrayObject()){
    $this->_nomPays=$nomPays;
    $this->_auteurs=$auteurs;
}

public function getNomPays(): string 
{
    return $this->_nomPays;
}

public function getListeAuteurs(): \ArrayObject 
{
    return  $this->_auteurs;
}

public function ajouterAuteur(Auteur $auteur)

 {
    $this->_auteurs->append($auteur);

}

}