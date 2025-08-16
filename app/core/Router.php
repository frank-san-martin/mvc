<?php

namespace App\core;

use App\controllers\HomeController;
use App\controllers\errors\HttpErrorController;

class Router
{
    public function dispatch($url)
    {
        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];

        // capturando controller e action
        $controllerNome = $parts[0] ?? 'Home';
        $controllerNome = 'App\controllers\\' . ucfirst($controllerNome) . 'Controller';
        $actionName = $parts[1] ?? 'index';

        // tratando controller
        if (!class_exists($controllerNome)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }
        $controller = new $controllerNome();

        //tratando a action
        if (!method_exists($controller, $actionName)) {
            $controllerError = $controller;
            $controller = new HttpErrorController();
            $controller->notFoundMethod($controllerError, $actionName);
            return;
        }

        //capturando os parametros
        $params = array_slice($parts, 2);

        // fazendo a chamada
        call_user_func_array([$controller, $actionName], $params);
    }
}
