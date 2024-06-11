<?php
namespace app\zoo;
class Vache extends Animal implements IMammifere,IHerbivore
{
    public function crier():string
    {
        return "MEUUUUH!";
    }
    
    public function brouter():string
    {
        return "la vache broute l'herbe";
    }
    public function mettreABas(): string
    {
        return "la vache met à bas un veau";
    }
    public function porter(): string
    {
        return "la femelle porte son veau";
    }
}