<?php

namespace src\Controllers;

use src\Core\Viewer;
use src\Models\Users;
class Home
{

    public function index(): void
    {
        $obj = new Users();
        $data['data'] = $obj -> findALl();
        Viewer::view("Home/Index", $data);
    }
    public function create(){
        $obj = new Users();
        $data['data'] = $obj -> findALl();
        var_dump($_POST);
        if (!empty($_POST)){
            $obj = new Users();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Home/Create", $data);
    }
    public function update(){
        $obj = new Users();
        $data['data'] = $obj -> findALl();
        Viewer::view("Home/update", $data);
    }
    public function delete(){
        $obj = new Users();
        $data['data'] = $obj -> findALl();
        Viewer::view("Home/delete", $data);
    }



}