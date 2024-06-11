<?php
namespace app\zoo;
class Chat extends Animal implements IMammifere,IPredateur
{
    public function crier():string
    {
        return "RRrRRRrrrrrRRRRRrr";
    }
    public function mettreABas(): string
    {
        return "le chat met à bas des chatons";
    }
    public function porter(): string
    {
        return "la femelle porte des châtons";
    }
    public function chasser(): string
    {
        return "le chat joue (ak chasse) avec sa nourriture";
    }
}