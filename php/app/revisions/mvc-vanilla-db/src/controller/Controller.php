<?php
/** /src/controller/Controller.php */
namespace app\controllers;
abstract class Controller
{
    public static function render(string $view,string $title,array $params = [])
    {
        $file = APPROOT . '/src/view/' . $view;
        if (!file_exists($file))
        throw new \ParseError('file not found');
    ob_start();
    include $file;
    $content=ob_get_clean();
    include APPROOT . '/src/view/base.view.php';
    }
}