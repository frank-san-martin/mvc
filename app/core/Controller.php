<?php
namespace App\core;

class Controller
{
    protected function view($view, $viewData = [])
    {
        extract($viewData);
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        require_once($viewFile);
    }
    
}
