<?php
abstract class Foo
{
    public $a = 0;
    protected $b = 0;
    private $c = 0;

    public function setB(int $b): void
    {
        $this->b = $b;
    }
    public abstract function test(): void;
}
//$obj = new Foo();
//$obj->a = 5;
//$obj->setB(7);
////var_dump($obj);
////$obj->c = 8;
//$obj1 = new Foo();
////var_dump($obj1->);


class Bar extends Foo
{
    protected $b = 6;
    public function getB(): int
    {
        return $this->b;
    }
    public function setC(int $c): void
    {
        $this->c = $c;
    }
    public function setB(int $b): void
    {
        $this->b = $b*$b;
    }
    public function getC(): int
    {
        return $this->c;
    }
    public function test(): void
    {
        echo "Hello, world!";
    }
}
$obj2 = new Bar();
$obj2->setB(4);
var_dump($obj2->getB());
//$obj2->setC(9);
//var_dump($obj2->getC());

class Br extends Foo

