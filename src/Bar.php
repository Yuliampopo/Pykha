<?php
namespace test;
class Bar extends Fee
{
    protected $f = 8;

    public function setF(int $f): void
    {
        $this->f = $f;
    }

    public function getF(): int
    {
        return $this->f;
    }

    public function stepen(): int
    {
        $obj = pow(($this->f + $this->getA()), 2);
        return $obj;
    }
}