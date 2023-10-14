<?php
namespace src;
class Tri extends Bar
{
    public $n = 4;

    public function getN(): int
    {
        return $this->n;
    }

    public function setN(int $n): void
    {
        $this->n = $n;
    }

    public function stepen(): int
    {
        $obj3 = $this->n * $this->getF();
        return $obj3;
    }

    public function dodat(): int
    {
        $obj4 = $this->n + $this->getA();
        return $obj4;
    }

}