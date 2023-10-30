<?php

namespace src\Models;

use \PDO;
class Users
{
    public function findAll(): array
    {
        $dsn = 'mysql:host=localhost;dbname=Test_db';
        $a = new PDO($dsn, 'root');
        $b = $a->query('SELECT * FROM Users', PDO::FETCH_ASSOC);
        var_dump($b->fetchAll());
        return [];
    }
}