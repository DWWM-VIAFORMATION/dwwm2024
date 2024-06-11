<?php
namespace app\zoo;
class Poule extends Animal implements IOvipare,IHerbivore,IPredateur
{
    public function crier():string
    {
        return "Kot kot koooo ddaaak!";
    }
    public function pondre():string
    {
        return "la poule pond un oeuf!";
    }
    public function couver():string
    {
        return "la poule couve ses oeufs!";
    }
    public function brouter():string
    {
        return "la poule picore dans l'herbe";
    }
    public function chasser(): string
    {
        return "La poule a chopé un ver de terre ! ";
    }
}