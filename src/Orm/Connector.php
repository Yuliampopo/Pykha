<?php

namespace src\Orm;
use \PDO;
class Connector
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $params = include __DIR__ . '/../Config/Params.php';
        $this->dsn = $params['driver'] . ':host=' . $params['host'] . ';dbname=' . $params['dbname'];
        $this->username = $params['user'];
        $this->password = $params ['password'];
    }
    /**
     * @return PDO
     */
    public function connect(): PDO
    {
        return new PDO($this->dsn, $this->username, $this->password);
    }

}