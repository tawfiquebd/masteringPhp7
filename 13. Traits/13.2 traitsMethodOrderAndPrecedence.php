<?php

// Traits method order and precedence

trait NumberSeriesOne{

    function numberSeriesA(){
        echo "Number series A\n";
        parent::numberSeriesA();    // calling parent class method means SomeClass method
    }

    function numberSeriesB(){
        echo "Number series B\n";
    }
}

class SomeClass{    // Its a parent class of its child class and traits
    function numberSeriesA(){
        echo "Printing Number series A\n";
    }
}

class NumberSeries extends SomeClass {  // extends parent class
    use NumberSeriesOne;    // using traits in child class

//    function numberSeriesA(){
//        echo "Printing Number series A\n";
//    }
}

$ns = new NumberSeries();
//$ns->numberSeriesA(); //before extends parent class it will call class NumberSeriesA()
$ns->numberSeriesA(); //But,after parent class extends it will call trait numberSeriesA()

