<?php
// Object Oriented Programming PHP
// class , object , method , property

class Human{
    public $name;

    function sayHi(){
        echo "{$this->name}";
        echo "Assalamualikum\n";
        $this->sayName();   // private method can be access here
    }

    // private method can't be access by object directly
    private function sayName(){
        echo "My name of sayName method: {$this->name} \n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow \n";
    }
}

class Dog{
    function sayHi(){
        echo "Woow \n";
    }
}

$h1 = new Human();  // Instance or Object creation
$h2 = new Human();
$c1 = new Cat();
$d1 = new Dog();

$h1->name = "Tawfique\n";
//echo "My name is: {$h1->name}";
$h1->sayHi();   // sayHi() Also accessing private method
$h1->age = 24;  // initialized outside of the class
echo $h1->age ."\n";

$c1->sayHi();
$d1->sayHi();

//$h2->sayName();   // can't call private method

$h2->sayHi();   // method of $h2 object . // It can't show name property value.
// Because the name value set by $h1 object