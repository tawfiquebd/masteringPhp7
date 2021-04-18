<?php

// static method and property

class MathCalculator{

    private $number;
    static $name;   // static property
    public static function fibonacci($n){
//        $this->number = 18; // can't use $this keyword in static method
        echo self::$name = "Tawfique\n";   // static property call by self::keyword
        echo "Fibonacci up to : {$n}\n";
    }

    static function doSomething(){
//        $this->factorial();   // can't call not-static method
        echo self::$name;   // calling static property
        self::fibonacci(200);   // calling static method by self:: keyword
        echo "Doing something\n";
    }

    // non-static method
    public function factorial($n){
        $this->fibonacci($n);   // calling static method in non-static method
        self::fibonacci(420); // calling static method in non-static method
//        echo $this->name;   // can't call static property using $this keyword
        echo "From non-static method ". self::$name; // calling static property
        echo "Factorial of {$n}\n";
    }

}

$mathCalObj = new MathCalculator;
//$mathCalObj->fibonacci(2);

$mathCalObj->factorial(5000);

// static method allow us to access method AND property without instantiate object
MathCalculator::fibonacci(10);
echo MathCalculator::$name;

MathCalculator::doSomething();