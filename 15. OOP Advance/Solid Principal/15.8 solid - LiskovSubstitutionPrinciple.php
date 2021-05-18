<?php

// Solid - Liskov substitution principle (LSP)


// Bad design principle example. Breaks the rule of LSP

//abstract class Bird{
//    abstract function eat();
//    abstract function sleep();
//    abstract function fly();
//}
//
//class BirdManager{
//    function maintainBird(Bird $b){
//        $b->eat();
//        $b->sleep();
//        $b->fly();
//    }
//}
//
//class Eagle extends Bird {
//    function eat(){
//
//    }
//    function sleep(){
//
//    }
//    function fly(){
//
//    }
//}
//
//class Penguin extends Bird{
//    function eat(){
//
//    }
//    function sleep(){
//
//    }
//    function fly(){ // Here penguin can't fly. // So, its a bad design principle.
//
//    }
//}


// Improving our code design principle - LSP (Liskov Substitution Principle) example.

abstract class Bird{
    abstract function eat();
    abstract function sleep();
}

abstract class FlyingBird extends Bird{
    abstract function fly();
}

abstract class WalkingBird extends Bird{
    abstract function walk();
}

class BirdManager{
    // We are accepting Abstract parent class object here. So, We can pass its child class objects
    // here also. This is LSP - Liskov Substitution Principle.
    function maintainBird(Bird $b){
        $b->eat();
        $b->sleep();
    }

    function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }

    function walkFlyingBird(WalkingBird $wb){
        $wb->walk();
    }
}

// FlyingBird is a derived class, of base class Bird. But it will get all parent methods.
// because FlyingBird also extends Bird class
class Eagle extends FlyingBird{
    function eat(){

    }

    function sleep(){

    }

    function fly(){

    }
}

class Hawk extends FlyingBird{
    function eat(){

    }

    function sleep(){

    }

    function fly(){

    }
}

class Penguin extends WalkingBird{
    function eat(){

    }

    function sleep(){

    }

    function walk(){

    }
}

