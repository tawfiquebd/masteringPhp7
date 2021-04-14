<?php

// Inheritance
// Parent and Child class scope

class parentClass{

    protected $name;

    public function __construct($name){
        $this->name = $name;
        $this->sayHi(); // refer to the child class method
    }

    public function sayHi(){
        echo "Hi from {$this->name} sayHi() parent class method\n";
    }

    public function sayHi2(){
        echo "Hello from {$this->name} sayHi2() parent class method\n";
    }
}

class childClass extends parentClass {
    // If we dont have this method sayHi() in child class, then it will be
    // called the parent class method sayHi()
    public function sayHi(){
        // calling parent class method sayHi() . Scope resolution operator ::
         parent::sayHi();   // calling exclusively parent method
         parent::sayHi2();   // we can also call others parent method
        echo "Hello from child class method\n";
    }
}

$childObj = new childClass("ABCD");



