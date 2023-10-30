<?php

namespace src\Models;
use \PDO;
class Songs

{
    public function findAll(): array
    {
        $dsn = 'mysql:host=localhost;dbname=Test_db';
        $a = new PDO($dsn, 'root');
        $b = $a->query('SELECT * FROM Songs left join Authors on Songs.author_id = Authors.id left join Genres on Genres.id = Songs.genre_id left join Albums on Albums.id - Songs.album_id', PDO::FETCH_ASSOC);
        var_dump($b->fetchAll());
      return [];
    }
}