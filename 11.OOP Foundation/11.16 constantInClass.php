<?php
// constant

define('OK', 12);
//define('OK',123); // constant is immutable , we cannot modify constant

//const ROLL = 130;   // constant
//echo OK;
//echo PHP_EOL;
//echo ROLL;

class MyClass{

    const CITY = "Chittagong";  // constant always in static scope

    public function city(){
//        echo "Hello from, ".self::CITY; // can be access by scope resolution operator
        echo "Hello from, ".$this::CITY;
    }
}

echo OK;    // constant define()
echo "\n";

$myclass = new Myclass;
//$myclass->CITY;       // can't access constant value.
echo $myclass::CITY;    // access/use by direct static scope
echo "\n";
echo MyClass::CITY;     // access/use by direct static scope
echo "\n";
$myclass->city();
echo "\n";