<?php

abstract class Shape{

    protected $color;
    public function setColor($Newcolor = "red")
    {
        $this->color = $Newcolor;
    }

    abstract protected function area();

}

class Square extends Shape{

    protected $side;

    public function __construct($s)
    {
        $this->side = $s;
    }

    public function area(){
        return $this->side * $this->side;
    }

}

class Circle extends Shape{

    protected $radius;
    
    public function __construct($r)
    {
        $this->radius = $r;
    }

    public function area(){

        return M_PI * pow($this->radius, 2);
    }

}

$shape1 = new Circle(5);
var_dump($shape1);
var_dump($shape1->area());

?>

