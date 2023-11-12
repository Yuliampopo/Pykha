<?php

namespace src\Orm;

use src\Models\Songs;
use src\Models\Users;

class Update
{
    private $connector;
    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(array $data, string $table_name, string $condition)
    {
        $update =  [];
        foreach ($data as $key => $value)
        {
            $value = "'" . $value . "'";
            $update[] = $key  . '=' . $value;
        }
        $query = $this->build_sql(implode(',', $update), $table_name, $condition);
        return $this->connector->connect()->exec($query);
    }

    public function build_sql( $data, $table_name, $condition): string
    {
        $update = 'UPDATE ' . $table_name .' SET '. $data . ' ' . $condition;
        var_dump($update);
        return 'UPDATE ' . $table_name .' SET '. $data . ' ' . $condition;
    }
}