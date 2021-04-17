<?php

    // abstract class and abstract method
    // abstract function dont have method body

abstract class Shape{

    abstract function getarea();
    abstract function getPerimeter();

    function sayHi(){   // non-abstract method
        echo "Hello!\n";
    }

    // parameter should be passed where this method will be called .
    abstract public function eat($banana);    // public abstact method

}

class Myclass extends Shape{
// Public abstract method can't be private here
    public function eat($ban){  // must include parameter here
        return "Bangla kola";
    }
    function getarea(){
        return ;
    }
    function getPerimeter(){
        return ;
    }
}

class Rectangle extends Shape{

    private $base, $height;

    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){

        $this->base = $base;
    }

    public function setHeight($height){

        $this->height = $height;
    }

    public function getArea(){
        return $this->base * $this->height;
    }

    public function getPerimeter(){
        return $this->base * $this->height;
    }


    function eat($kola){
        return ;
    }

}

class Triangle extends Shape{

    public function getArea(){
        return;
    }

    public function getPerimeter(){
        return;
    }

    public function sayHi(){
        parent::sayHi();    // Base class method calling
        echo "Hello from the Triangle class\n"; // method overriding
    }

    function eat($kela){
        return ;
    }
}

//$shapeObj = new Shape();  // Base Abstract class can't be instantiate

$rectangleObj = new Rectangle(10, 10);
echo $rectangleObj->getarea();
echo PHP_EOL;

$myClassObj = new Myclass();
$myClassObj->sayHi();

echo $myClassObj->eat("Kola");