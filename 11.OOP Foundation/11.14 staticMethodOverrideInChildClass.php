<?php

// Static method override in Child class.
class A{
    static function sayHi(){
        echo "Hi from A\n";
    }
}

class B extends A{
//    function sayHi(){   // can't override static method in not-static way
//        echo "Hi from B\n";
//    }

    static function sayHi(){ // to override static method, it should be  static
        echo "Hi from B\n";
        parent::sayHi();    // calling same static method from parent class.
    }
}

B::sayHi();