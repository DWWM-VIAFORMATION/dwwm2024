<?php
require_once 'ICrier.php';
require_once 'chien.php';
require_once 'chat.php';
require_once 'fonctions.php';

$chien = new Chien();
$chat = new Chat();

faireCrier($chien); // Affiche "Le chien aboie."
faireCrier($chat);  // Affiche "Le chat miaule."
