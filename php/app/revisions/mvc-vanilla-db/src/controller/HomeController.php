<?php
/** /src/controller/HomeController.php */
namespace app\controllers;
use  \app\controllers\Controller;
use app\entities\Recette;
class HomeController extends   Controller
{
    public static function index()
    {
        self::render('home.view.php','HomePage');
    }
    public static function list()
    {
        $params=['recettes'=>Recette::getList()];
        self::render('list.view.php','Liste des recettes', $params);
    }
    public static function show(int $id)
    {
        $params=['recette'=>Recette::read($id)];
        self::render('show.view.php','Voir une recette', $params);
    }
}