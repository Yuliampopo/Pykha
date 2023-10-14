<?php
namespace src;
class Bam extends Fee
{
    protected $d = 9;
    public function setD(int $d): void
    {
        $this->d = $d;
    }
    public function getD(): int
    {
        return $this->d;
    }
    public function stepen(): int
    {
        $obj1 = $this->d * $this->getB();
        return $obj1;
    }
}