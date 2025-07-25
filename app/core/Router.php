<?php
require_once('../app/controllers/HomeController.php');
require_once('../app/controllers/errors/HttpErrorController.php');



class Router
{
    public function dispatch($url)
    {
        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];

        // capturando controller e action
        $controllerNome = $parts[0] ?? 'Home';
        $actionName = $parts[1] ?? 'index';

        $controllerNome = ucfirst($controllerNome) . 'Controller';

        // tratando controller
        if (!class_exists($controllerNome)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }
        $controller = new $controllerNome();

        //tratando a action
        if (!method_exists($controller, $actionName)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }

        //capturando os parametros
        $params = array_slice($parts, 2);

        // fazendo a chamada
        call_user_func_array([$controller, $actionName], $params);
    }
}
