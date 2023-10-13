<?php
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