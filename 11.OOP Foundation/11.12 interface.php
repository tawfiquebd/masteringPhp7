<?php

// interface
// interface is a like class. interface doesn't allow to create instance/object.
// interface allows implements to a class and extends to a interface class.
// interface can't implements interface class, interface can extends to interface class
// interface class don't force to use methods to an extended interface class
// After implements interface class into a class, It have to use interface's class methods

interface BaseAnimal{

    function isAlive(); // method can't have body
    function canEat($param1, $param2);  // can have parameters in signature
    function breed();
}

class Animal implements BaseAnimal{
    // must have interface methods
    function isAlive()
    {
        // TODO: Implement isAlive() method.
    }
    public function canEat($param1, $param2)
    {
        // TODO: Implement canEat() method.
    }
    public function breed()
    {
        // TODO: Implement breed() method.
    }
}

interface BaseHuman extends BaseAnimal {
    // interface class BaseAnimal not forcing interface BaseHuman class to use methods.
    function canTalk();
}

// Abstract class can implements Interface class
abstract class AbstractHuman implements BaseHuman{

    abstract public function run();
    function canEat($param1, $param2)
    {
        echo "I am eating\n";
    }
}

// class can extends Abstract class
class Human extends AbstractHuman {

    public function run(){

    }

    function isAlive()
    {
        // TODO: Implement isAlive() method.
    }
    public function canEat($param1, $param2)
    {
        // TODO: Implement canEat() method.
    }
    public function breed()
    {
        // TODO: Implement breed() method.
    }
    public function canTalk()
    {
        // TODO: Implement canTalk() method.
    }
}

$humanObj = new Human;
//echo $humanObj instanceof Human;        // True
//echo $humanObj instanceof BaseHuman;    // polymorphism behavior = An object behave/morph in many types
//echo $humanObj instanceof BaseAnimal;   // polymorphism behavior

$catObj = new Animal;
echo $catObj instanceof Animal;