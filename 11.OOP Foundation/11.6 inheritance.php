<?php

// Inheritance
// Parent class always inheritance by his child class

class Animal{   // Animal is Parent / Base class

    protected $name;

    public function __construct($name = ''){
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }

    public function run(){
        echo "{$this->name} is running\n";
    }

    public function greet(){}   // Empty body // We will override this method

    public function addTitle($title){
        $this->name = $title. " " . $this->name;
    }
}

class Human extends Animal{ // Human is a child / sub class .

    public function smile(){
        echo "{$this->name} is smiling\n";
    }

    public  function greet(){   // overridden method of base class
        $this->addTitle("Mr.");
        echo "{$this->name} says Hello\n";
    }
}

class Cat extends Animal{

    public  function greet(){
        echo "{$this->name} says Meow\n";
    }
}

$humanObj = new Human("Tawfique");
$humanObj->greet();
$humanObj->smile();

//var_dump($humanObj->name);    // "Mr. Tawfique"

$catObj = new Cat("Tom");
$catObj->greet();