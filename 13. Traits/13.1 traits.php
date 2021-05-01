<?php


/* PHP only supports single inheritance: A child class can inherit only from one
single parent. So, what if a class needs to inherit multiple behaviors? OOP traits
solve this problem.Traits are used to declare methods that can be used in multiple
classes. Traits can have methods and abstract methods that can be used in multiple
classes, and the methods can have any access modifier (public, private, or protected).

A traits can use in another traits.
A traits can't be instantiate.
A traits can be used in another class as much as
Private traits method can't be use in class. First, it should be call in another method,
then it could be use in class by calling that method.
*/

trait NumberSeriesOne{

    private function numberSeriesA(){   // private method
        echo "Number series A\n";
    }

    function numberSeriesB(){
        $this->numberSeriesA(); // private method calling here .
        echo "Number series B\n";
    }
}

trait NumberSeriesTwo{
    use NumberSeriesOne;        // Using traits in another traits
    function numberSeriesC(){
        $this->numberSeriesA(); // private method calling here
        echo "Number series C\n";
    }

    function numberSeriesD(){
        echo "Number series D\n";
    }
}

class NumberSeries{
    use NumberSeriesTwo;    // traits  // Multiple traits can use here by adding comma
}

$numS = new NumberSeries;
$numS->numberSeriesB();
$numS->numberSeriesC();