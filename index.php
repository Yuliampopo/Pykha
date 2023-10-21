<?php

include "vendor\autoload.php";

$URL = $_SERVER['REQUEST_URI'];

$classPatch = 'src\Controllers\\';

if($URL !== "/") {
    $URL = substr($URL,1);                
    $path = explode("/", $URL, 2);
    $path[0] = $classPatch . $path[0];
} else {
    $path = array($classPatch . "home");
}

if (!class_exists($path[0])) {
    $path = array($classPatch . "error"); // $path = ["src\Controllers\\error"];
}

$obj = new $path[0]();
$method = $path[1];
if (method_exists($obj, $method)) {
    $obj->$method();
} else {
    $obj->index();
}
