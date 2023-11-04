<?php

namespace src\Models;

use \PDO;
use src\Orm\Connector;
use src\Orm\Insert;

class Users
{
    private $table_name = 'Users';

    public function findAll(): array
    {
        $dsn = 'mysql:host=localhost;dbname=Test_db';
        $a = new PDO($dsn, 'root');
        $b = $a->query('SELECT * from Users', PDO::FETCH_ASSOC);
        //var_dump($b->fetchAll());
        return $b->fetchAll();
    }

    public function insert(array $data): bool
    {
        try {
            $insert = new Insert();
            return $insert->exec($data, $this->table_name);
        } catch (\Exception $e) {
            var_dump('Error in insert into in Users model');
            var_dump($e->getMessage());
        }
        return false;
    }
}