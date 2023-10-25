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
        Viewer::view("Home", $data);
    }


}