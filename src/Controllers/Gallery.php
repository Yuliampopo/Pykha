<?php

namespace src\Controllers;

use src\Core\Viewer;
use src\Models\Songs;

class Gallery
{

    public function index(): void
    {
        $obj = new Songs();
        $data['data'] = $obj -> findALl();
        Viewer::view("Gallery/Index", $data);
    }
    public function create(){
        $obj = new Songs();
        $data['data'] = $obj -> findALl();
        var_dump($_POST);
        if (!empty($_POST)){
            $obj = new Songs();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Gallery/create", $data);
    }
    public function update(){
        $obj = new Songs();
        $data['data'] = $obj -> findALl();
        Viewer::view("Gallery/update", $data);
    }
    public function delete(){
        $obj = new Songs();
        $data['data'] = $obj -> findALl();
        Viewer::view("Gallery/delete", $data);
    }

}