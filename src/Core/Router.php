<?php

namespace src\Core;

final class Router
{
    private $controllerPatch = "src\\Controllers\\";

    public function run(): void
    {
        $URL = $_SERVER['REQUEST_URI'];
        $method = "";
        if ($URL !== "/") {
            $URL = ucfirst(substr($URL,1));
            $path = explode("/", $URL, 2);
            $controller = $this->controllerPatch . $path[0];
            $method = $path[1];
        }
        else {
            $controller = $this -> controllerPatch . "home";
        }

        if (!class_exists($controller)) {
            $controller = $this -> controllerPatch . "error";
        }

        $obj = new $controller();

        if (method_exists($obj, $method)) {
            $obj->$method();
        } else {
            $obj->index();
        }
    }
}