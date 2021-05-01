<?php

// Traits method order and precedence

trait NumberSeriesOne{

    function numberSeriesA(){
        echo "Number series A\n";
    }

    function numberSeriesB(){
        echo "Number series B\n";
    }
}

class SomeClass{
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

