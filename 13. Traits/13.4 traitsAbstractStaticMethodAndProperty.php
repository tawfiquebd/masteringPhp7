<?php

// Abstract method, Static method and Property in Tratis

trait MyTrait{

    static $number; // static property
    abstract function sayHi();  // abstract method
}

class MyClassA{
    use MyTrait;

    function sayHi(){
        echo "Say Hi MyClassA\n";
    }
}

// If we use same trait as new in a new class, then it will be treat as new instance
class MyClassB{
    use MyTrait;    // using same trait but as a different for new class MyClassB

    function sayHi(){
        echo "Say Hi from MyClassB\n";
    }
}

MyClassA::$number = 2; // static property access via scope resolution operator
echo MyClassA::$number;
echo PHP_EOL;

$myclass = new MyClassA();
$myclassB = new MyClassB();
$myclass->sayHi();
//echo $myclass::$number; // static property access via object // 2

MyClassB::$number = 8;
echo MyClassB::$number; // treat as different instance
echo PHP_EOL;
echo $myclassB::$number;