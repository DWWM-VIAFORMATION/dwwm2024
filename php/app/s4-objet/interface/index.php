<?php
require_once 'ClasseMere.php';
require_once 'IEchoable.php';
require_once 'jsonable.php';
require_once 'Personne.php';
require_once 'Question.php';
$personne = new Personne();
$question = new Question();

$personne->echo();
$question->echo();
echo $personne->enJson();
echo $question->enJson();