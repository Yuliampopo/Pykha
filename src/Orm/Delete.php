<?php

namespace src\Orm;

class Delete
{
    private $connector;
    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(string $table_name, string $condition)
    {
        $query = $this->build_sql($table_name, $condition);
        return $this->connector->connect()->exec($query);
    }

    public function build_sql($table_name, $condition): string
    {
        $delete = 'DELETE FROM ' . $table_name . ' ' . $condition;
        var_dump($delete);
        return 'DELETE FROM ' . $table_name . ' ' . $condition;
    }
}