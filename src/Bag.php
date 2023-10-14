<?php
namespace src;
final class Bag extends Fee
{
    protected $j = 0;
    public function setJ(int $j): void
    {
        $this->j = $j;
    }
    public function getJ(): int
    {
        return $this->j;
    }
    public function stepen(): int
    {
        $obj2 = $this->j / $this->getB();
        return $obj2;
    }
}
