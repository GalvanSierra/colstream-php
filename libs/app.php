<?php
require_once "./controllers/errores.php";

class App
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

//        No se define controlador
        if (empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

//        var_dump($url);

        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {
            require_once $archivoController;

            $controller = new $url[0];
            $controller->loadModel($url[0]);

            $parameters = sizeof($url);

            if ($parameters > 1) {
                if ($parameters > 2) {
                    $param = [];
                    for ($i = 2; $i < $parameters; $i++) {
                        $param[] = $url[$i];
                    }
//                    var_dump($param);
                    $controller->{$url[1]}($param);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->render();
            }
        } else {
            $controller = new Errores();
        }
    }
}