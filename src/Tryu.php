<?php
namespace src;
class Tryu extends Bam
{
    public $m = 4;

    public function getM(): int
    {
        return $this->m;
    }

    public function setM(int $m): void
    {
        $this->m = $m;
    }

    public function stepen(): int
    {
        $obj5 = $this->m - $this->getD();
        return $obj5;
    }

    public function dodat(): int
    {
        $obj6 = $this->m + $this->getB();
        return $obj6;
    }
}