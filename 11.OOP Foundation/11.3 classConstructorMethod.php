<?php

// class constructor method
// constructor is a special method, when an object created.
//The method will call itself automatically.

class Human{

    public $name;
    public $age;

    public function __construct($personName, $personAge = 0){   // receiving argument
        $this->name = $personName;  // assigning value to our property
        $this->age = $personAge;
    }
    public function sayHi(){
        echo "Salam\n";
    }
    public function sayName(){
        echo "My name is: {$this->name}\n";
        if($this->age){
            echo "Hello, My name is {$this->name} and I am {$this->age} year old\n";
        }
        else{
            echo "Hi, My name is {$this->name} and I Don't know how old I am\n";
        }
    }

}

$humanObj = new Human("Tawfique",24);  // passing parameter

$humanObj->sayHi();
//$humanObj->name = "Tawfique";
$humanObj->sayName();

$humanObj2 = new Human("Rafin",24);
$humanObj2->sayName();
$humanObj2->sayHi();

$humanObj3 = new Human("Safin");
$humanObj3->sayName();