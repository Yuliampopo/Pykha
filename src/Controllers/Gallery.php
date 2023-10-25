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
        Viewer::view("Gallery", $data);
    }

}