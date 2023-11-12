<?php

namespace src\Controllers;

use src\Core\Viewer;
use src\Models\Songs;
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
        $data = [];
        if(!empty($_GET['id'])) {
            $obj = new Users();
            $data = $obj->findOne($_GET['id']);
        }
        if (!empty($_POST)){
            $obj = new Users();
            $obj-> update(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Home/update", $data);
    }
    public function delete(){
        if (!empty($_GET['id'])) {
        $obj = new Users();
            var_dump($_GET['id']);
            $obj->delete($_GET['id']);
        }
        header ('Location:/home');
    }


}