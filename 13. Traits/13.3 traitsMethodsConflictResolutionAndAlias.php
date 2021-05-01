<?php

// Traits methods conflict resolution and Alias create

trait NetflixSeriesOne{

    function netflixSeriesA(){  // scope is public will be same in all other class
        echo "Netflix series A from trait\n";
    }

    function netflixSeriesB(){
        echo "Netflix series B from trait\n";
    }
}

// another example of using multiple traits and multiple method with same name
trait NationA{
    function nationalA(){
        echo "Hello from trait class NationA:nationalA()\n";
    }
}

trait NationB{
    function nationalA(){
        echo "Hello from trait class NationB:nationalA()\n";
    }
}

/*Naming Conflicts:::
Sometimes, it is possible that you need to import a trait into a class,
but there is a conflicting function or variable name. This can be solved using either
the as or insteadof operator:

The insteadof specifies that you want to use someFunc from A instead of B.
The as operator specifies a different name for the imported function - basically an alias.
If you use the insteadof operator and don't alias the replaced function,
then it is essentially discarded. In the case above, B::someFunc was discarded
since it was not aliased.
*/
class MainCLass{
    use NationA, NationB{   // using multiple traits
        // Avoiding Conflicts and collision So that, using nationalA() method as NationA
        NationA::nationalA insteadof NationB;
        NationA::nationalA as nationalAA;
        NationB::nationalA as nationalAAA;


    }
}

class OtherClass{    // Its a parent class of its child class and traits
    function netflixSeriesA(){
        echo "Printing Parent OtherClass netflixSeriesA()\n";
    }
}

class NetflixSeries extends OtherClass {  // extends parent class
    use NetflixSeriesOne{
        netflixSeriesA as netflixSeriesAA;  // created method name Alias from Trait class
    }

    function netflixSeriesA(){  // overriding from trait method
        echo "Printing Child NetflixSeriesClass netflixSeriesA()\n";
    }
}



$ns = new NetflixSeries();
$ns->netflixSeriesA();  // calling overridden method from NetflixSeries::netflixSeriesA()
$ns->netflixSeriesAA(); // calling NetflixSeriesOne traits method netflixSeriesA()

$main = new MainCLass();
$main->nationalA();   // trait  class nationalA
$main->nationalAA();   // trait  class nationalA
$main->nationalAAA();   // trait class nationalB