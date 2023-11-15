<?php

namespace src\Orm;
use PDO;

class Select
{
    private string $fieldlist = '*';
    private string $table_name;
    private string $condition_type = 'AND';
    private array $condition;
    private string $order_field;
    private string $order;
    private string $limit;
    private string $offset;
    private Connector $connector;

    public function setConditionType($condition_type): void {
        if (strtoupper($condition_type) == 'AND' or strtoupper($condition_type) == 'OR' ) {
            $this->condition_type = $condition_type;
        }
    }

    public function setCondition($condition): void {
        $this->condition = $condition;
    }

    public function setOrderField($order_field): void {
        $this->order_field = $order_field;
    }
    public function setOrder($order): void {
        if (strtoupper($order) == 'ASC' or strtoupper($order) == 'DESC' ) {
            $this->order = $order;
        }
    }

    public function setLimit($limit): void {
        if (is_int($limit)) $this->limit = $limit;
    }
    public function setOffset($offset): void {
        if (is_int($offset)) $this->offset = $offset;
    }

    public function __construct()
    {
        $this->connector = new Connector();
    }

    public function exec(string $table_name)
    {
        $this->table_name = $table_name;
        $query = $this->build_sql();
        $query = $this->connector->connect()->query($query, \PDO::FETCH_ASSOC);
        $query->execute();
        return $query->fetchAll();
    }

    private function build_sql(): string
    {
        $sql = 'SELECT ' . $this->fieldlist .' FROM '. $this->table_name;

        if (!empty($this->condition)) {
            if ($this->condition_type == 'AND') $sql = $sql . ' ' . WHERE::andWhere($this->condition);
            if ($this->condition_type == 'OR') $sql = $sql . ' ' . WHERE::orWhere($this->condition);
        }

        if (!empty($this->order_field)) {
            $sql = $sql . ' ORDER BY ' . $this->order_field;
            if (!empty($this->order)) $sql = $sql . ' ' . strtoupper($this->order);
        }

        if (!empty($this->limit)) {
            $sql = $sql . ' LIMIT ' . $this->limit;
        }

        if (!empty($this->offset)) {
            $sql = $sql . ' OFFSET ' . $this->offset;
        }

        return $sql;
    }
}
