<?php

namespace src\Core;

class Viewer
{
    public static function view(string $name, array $data = []): void
    {
        extract($data);
        include __DIR__ . "\\..\\..\\view\\" . $name . ".php";

    }
}