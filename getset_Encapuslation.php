<?php

class Human{

    private $name;
    private $age;
    private $height;
    private $isMale = false;

    public function __construct()
    {
        $this->name = "No Name";
        $this->age = 0;
        $this->height = "1 Feet";
    }

    // Getters and setters 
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function isMale() {
        return $this->isMale;
    }

    public function setIsMale($isMale) {
        $this->isMale = $isMale;
    }

}

$p1 = new Human();
var_dump($p1);

var_dump("After setting");
$p1->setName("Yash");
$p1->setAge(21);
$p1->setHeight("5'8 Feet");
$p1->setIsMale(true);
var_dump($p1);

?>