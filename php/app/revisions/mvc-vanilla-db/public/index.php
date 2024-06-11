<?php
/** /public/index.php */
declare(strict_types=1);
require_once dirname(__DIR__) .'/vendor/autoload.php';
use app\controllers\HomeController;
use app\controllers\Controller;

$params = explode('/',$_SERVER['REQUEST_URI']);
switch ($params[1]) {
    case "": HomeController::index();
    break;
    case "list": HomeController::list();
    break;
    case "show": HomeController::show((int)$params[2]);
    break;
    default:
        Controller::render('404.error.php','ERROR 404');
}