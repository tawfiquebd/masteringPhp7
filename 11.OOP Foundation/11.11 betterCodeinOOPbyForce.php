<?php

// Write better code in oop by force them
class Shape{

}

class Shapes{

    private $shapes;

    function __construct(){
        $this->shapes = array();
    }

    public function addShape(Shape $shape){ // Shape class $object accepted only
        array_push($this->shapes, $shape);
    }

    public function totalShapes(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape { // extends by Shape class

}

class Triangle extends Shape {  // extends by Shape class

}

class Student{  // Student is not a Shape

}

$shapeCollections = new Shapes();
$shapeCollections->addShape(new Rectangle()); // passing Shape type of object
$shapeCollections->addShape(new Triangle()); // passing Shape type of object

// Student object can't pass here, because addShape() method parameter must be a Shape type of object
//$shapeCollections->addShape(new Student());

echo $shapeCollections->totalShapes();
