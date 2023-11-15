<?php

namespace src\Models;

use \PDO;
use src\Orm\Connector;
use src\Orm\Delete;
use src\Orm\Insert;
use src\Orm\Select;
use src\Orm\Update;
use src\Orm\Where;

class Users
{
    private $table_name = 'Users';

    public function findAll(): array
    {
        $dsn = 'mysql:host=localhost;dbname=Test_db';
        $a = new PDO($dsn, 'root');
        $b = $a->query('SELECT * FROM Users', PDO::FETCH_ASSOC);
        //var_dump($b->fetchAll());
        return $b->fetchAll();
    }
    public function findOne(int $id): array
    {
        $dsn = 'mysql:host=localhost;dbname=Test_db';
        $a = new PDO($dsn, 'root');
        $b = $a->query('SELECT * FROM Users WHERE Users.id = ' . $id, PDO::FETCH_ASSOC);
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
    public function update(array $data, $condition): bool
    {
        try {
            $update = new Update();
            return $update->exec($data, $this->table_name, Where::andWhere([['id', $condition, '=']]));
        } catch (\Exception $ex) {
            var_dump('Error in update Users model');
            var_dump($ex->getMessage());
        }
        return false;
    }
    public function delete($condition): bool {
        try {
            $delete = new Delete();
            return $delete->exec($this->table_name, Where::andWhere([['id', $condition, '=']]));
        }catch (\Exception $ex){
            var_dump('Error delete in Users model');
            var_dump($ex->getMessage());
        }
        return false;
    }
    public function findAll1(): bool
    {
        try {
            $select = new Select();
            return $select->exec($this->table_name);
        } catch (\Exception $ex) {
            var_dump('Error in select from Users model');
            var_dump($ex->getMessage());
        }
        return false;
    }
}