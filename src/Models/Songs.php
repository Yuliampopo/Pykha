<?php

namespace src\Models;
use \PDO;
use src\Orm\Connector;
use src\Orm\Delete;
use src\Orm\Insert;
use src\Orm\Select;
use src\Orm\Update;
use src\Orm\Where;

class Songs
{
    private $table_name = 'Songs';

    public function findAll(): array
    {
        $dsn = 'mysql:host=localhost;dbname=Test_db';
        $a = new PDO($dsn, 'root');
        $b = $a->query('SELECT Songs.id as id, Songs.year as year, Songs.name as title, Authors.name as author, Genres.genre_name as style, Songs.length as length FROM Songs left join Authors on Songs.author_id = Authors.id left join Genres on Genres.id = Songs.genre_id left join Albums on Albums.id = Songs.album_id', PDO::FETCH_ASSOC);
        //var_dump($b->fetchAll());
        return $b->fetchAll();
    }

    public function findOne(int $id): array
    {
        $dsn = 'mysql:host=localhost;dbname=Test_db';
        $a = new PDO($dsn, 'root');
        $b = $a->query('SELECT Songs.year as year, Songs.name as title, Authors.name as author, Genres.genre_name as style, Songs.length as length FROM Songs left join Authors on Songs.author_id = Authors.id left join Genres on Genres.id = Songs.genre_id left join Albums on Albums.id = Songs.album_id WHERE Songs.id = ' . $id, PDO::FETCH_ASSOC);
        //var_dump($b->fetchAll());
        return $b->fetchAll();
    }

    public function insert(array $data): bool
    {
        try {
            $insert = new Insert();
            return $insert->exec($data, $this->table_name);
        } catch (\Exception $e) {
            var_dump('Error in insert into in Songs model');
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
            var_dump('Error in update Songs model');
            var_dump($ex->getMessage());
        }
        return false;
    }
    public function delete($condition): bool {
        try {
            $delete = new Delete();
            return $delete->exec($this->table_name, Where::andWhere([['id', $condition, '=']]));
        }catch (\Exception $ex){
            var_dump('Error delete in Songs model');
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
            var_dump('Error in select from Songs model');
            var_dump($ex->getMessage());
        }
        return false;
    }
}
