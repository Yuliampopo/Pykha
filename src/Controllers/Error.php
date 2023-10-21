<?php

namespace src\Controllers;

class Error
{

    public function index()
    {

        header('HTTP/1.1 404 Not Found');
        die ('404 Not Found');


    }

}