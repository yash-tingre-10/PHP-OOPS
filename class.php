<?php

class Human{

    
    public $name;
    public $age;
    public $height;
    public $isMale = false;

    public function __construct()
    {
        $this->name = "No Name";
        $this->age = 0;
        $this->height = "1 Feet";
    }

}

$p1 = new Human();
var_dump($p1->name);

?>