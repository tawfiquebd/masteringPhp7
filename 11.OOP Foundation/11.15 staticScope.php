<?php

//static variable scope

class A {

//    private $name;  // private property can't access in outside of class and static method
//    private static $name; // private static property can access in static method. but not in outside of class
    protected static $name; // protected static property can be access from sub class .

    static function sayHi(){
        echo "Hi from A\n";
        echo self::$name = "Hello"; // private static property can access in static method but not in outside of class
//        $this->name;  //can't access private non-static property using $this keyword
//        echo self::$name; //can't access private non-static property using self keyword
    }
}

class B extends A{

     static function sayHi(){
        echo "Hi from B\n";
//        echo parent::$name;   // can't access private static property from parent class . because it private property
//        echo parent::$name;   // protected property $name can be access now
        parent::sayHi();
    }
}

B::sayHi();
//A::sayHi();