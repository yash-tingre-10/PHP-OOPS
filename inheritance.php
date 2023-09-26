<?php

abstract class Shape{

    protected $color;
    public function setColor($Newcolor = "red")
    {
        $this->color = $Newcolor;
    }

    abstract protected function calcArea();

}

class Square extends Shape{

    protected $side;

    public function __construct($s)
    {
        $this->side = $s;
    }

    public function calcArea(){
        return $this->side * $this->side;
    }

}

class Circle extends Shape{

    protected $radius;
    
    public function __construct($r)
    {
        $this->radius = $r;
    }

    public function calcArea(){

        return M_PI * pow($this->radius, 2);
    }

}

$shape1 = new Circle(5);
var_dump($shape1);
var_dump($shape1->calcArea());

?>