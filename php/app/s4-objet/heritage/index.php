<?php
declare(strict_types=1);
require 'vendor/autoload.php';
use app\entity\Character;
use app\entity\Duel;
use app\entity\Hero;
use app\entity\Monstre;
$albert = new Hero(name:'Albert',constitution:10,ac:8,force:10,dexterite:5);
$guraktak = new Monstre(name:' Guraktak',pv:15,ac:2,attaque:10,degats:6);
$vainqueur = Duel::jouerDuel($albert,$guraktak);
echo " c'est le duel \n";
echo $albert;
echo " VS ";
echo $guraktak;
echo "----------------\n";
if ($vainqueur)
    echo "le gagnant est ".$vainqueur->getName();
else 
    echo "match nul!";
