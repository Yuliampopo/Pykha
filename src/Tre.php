<?php
namespace src;
class Tre extends Bar
{
    public $e = 4;

    public function getE(): int
    {
        return $this->e;
    }

    public function setE(int $e): void
    {
        $this->e = $e;
    }

    public function stepen(): int
    {
        $obj3 = $this->e * $this->getF();
        return $obj3;
    }

    public function dodat(): int
    {
        $obj4 = $this->e + $this->getA();
        return $obj4;
    }

}