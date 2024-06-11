<?php
namespace app\zoo;
class Chien extends Animal implements IMammifere,IPredateur
{
    public function crier():string
    {
        return "Wafff";
    }
    public function mettreABas(): string
    {
        return "le chien met à bas des chatons";
    }
    public function porter(): string
    {
        return "la femelle porte des chiots";
    }
    public function chasser(): string
    {
        return "le chien chasse avec classe le ragondin";
    }
}