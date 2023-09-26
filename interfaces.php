<?php

interface Shape {
    public function area();
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return $this->side * $this->side;
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

$square = new Square(5);
echo 'Area of Square: ' . $square->area() . "\n";

$circle = new Circle(3);
echo 'Area of Circle: ' . $circle->area() . "\n";
