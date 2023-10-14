<?php
namespace src;
class Tro extends Bam
{
    public $o = 2;

    public function getO(): int
    {
        return $this->o;
    }

    public function setO(int $o): void
    {
        $this->o = $o;
    }

    public function stepen(): int
    {
        $obj5 = $this->o - $this->getD();
        return $obj5;
    }

    public function dodat(): int
    {
        $obj6 = $this->o + $this->getB();
        return $obj6;
    }
}