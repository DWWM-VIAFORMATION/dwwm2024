<?php
declare(strict_types=1);
require_once './vendor/autoload.php';

use app\zoo\Chat;
use app\zoo\Chien;
use app\zoo\Vache;
use app\zoo\Poule;



$chat = new Chat('Arwen');
$chien = new Chien('Milou');
$vache = new Vache('Roussette');
$poule = new Poule('Cliclac');
$herbivores = new ArrayObject();

$herbivores->append($vache);
$herbivores->append($poule);

$carnivores = new ArrayObject();
$carnivores->append($chat);
$carnivores->append($chien);
$carnivores->append($poule);

$tous = new ArrayObject();
$tous->append($vache);
$tous->append($poule);
$tous->append($chat);
$tous->append($chien);
$tous->append($poule);

foreach ($herbivores as $key => $animal) {
    echo "\n".$animal->brouter();
}
foreach ($carnivores as $key => $animal) {
    echo "\n".$animal->chasser();
}
foreach ($tous as $key => $animal) {
    // var_dump(class_implements($animal));
    if(in_array('app\zoo\IPredateur',class_implements($animal)))
        echo "\n".$animal->chasser();
    if(in_array('app\zoo\IHerbivore',class_implements($animal)))
        echo "\n".$animal->brouter();
}