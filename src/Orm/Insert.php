<?php

namespace src\Orm;

use src\Models\Songs;
use src\Models\Users;

class Insert
{
    private $connector;
    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(array $data, string $table_name)
    {
        $columns = $values = [];
        foreach ($data as $key => $value)
        {
            $columns[] = $key;
            $values[] = $value;
        }
        $query = $this->build_sql(implode(',', $columns), $this->prepare_values($values),$table_name);
        return $this->connector->connect()->exec($query);
    }

    public function build_sql($columns,$values, $table_name): string
    {
        //$sql = 'INSERT INTO ' . $table_name .' (' . $columns . ') VALUES (' . $values . ')';
        //var_dump($sql);
        return 'INSERT INTO ' . $table_name .' (' . $columns . ') VALUES (' . $values . ')';
    }
    public function prepare_values(array $values): string
    {
        $temp = [];
        foreach ($values as $value) {
            if (!is_int($value)) {
                $temp[] = "'" . $value . "'";
            } else {
                $temp[] = $value;
            }
        }
        return implode(',', $temp);

    }
}