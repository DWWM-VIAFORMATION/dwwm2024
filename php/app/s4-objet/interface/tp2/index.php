<?php
declare(strict_types=1);
require_once './vendor/autoload.php';
use app\bibli\Livre;
$livre= new Livre('Le Seigneur des Anneaux');
echo $livre->print();