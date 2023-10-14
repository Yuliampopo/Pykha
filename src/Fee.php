<?php
namespace src;
abstract class Fee
{
    private $a = 2;
    private $b = 3;
    public function setA(int $a): void
    {
        $this->a= $a;
    }
    public function getA(): int
    {
        return $this->a;
    }
    public function setB(int $b): void
    {
        $this->b = $b;
    }
    public function getB(): int
    {
        return $this->b;
    }
    public abstract function stepen(): int;
};