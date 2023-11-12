<?php

namespace src\Controllers;

use src\Core\Viewer;
use src\Models\Songs;

class Gallery
{

    public function index(): void
    {
        $obj = new Songs();
        $data['data'] = $obj -> findAll();
        Viewer::view("Gallery/Index", $data);
    }
    public function create(){
        $obj = new Songs();
        $data['data'] = $obj -> findAll();
        if (!empty($_POST)){
            $obj = new Songs();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Gallery/create", $data);
    }
    public function update(){
        $data = [];
        if(!empty($_GET['id'])){
            $obj = new Songs();
            $data = $obj -> findOne($_GET['id']);
        }
        if (!empty($_POST)){
            $obj = new Songs();
            $obj->update(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Gallery/update", $data);
    }
    public function delete(){
        if (!empty($_GET['id'])) {
            $obj = new Songs();
            var_dump($_GET['id']);
            $obj->delete($_GET['id']);
        }
        header ('Location:/gallery');
//        $data['data'] = $obj -> findAll();
//        Viewer::view("Gallery/index", $data);
    }

}