<?php

// Php variable  immutable na = that means variable er value bar bar change kora jay. 
// Its mutable 

$name = "tawfique";
echo $name;
echo "\n";

$name = "hossain";
echo $name;
echo "\n";

// Php constant value is always fixed and is not changeable 

define("PI",3.14159);   // constant name is in uppercase, also it can be use as capital or small case.
// uppercase is just naming convention

echo PI;    // works fine 
echo "\n";
echo "Hello {PI}"; // we can't use constant variable at string. It will take as string 

// PI = 123;   // it will show parse error

// define('PI', 123);  // constant PI already defined . it can't be changed . 

// constant function 

echo "\n";
echo constant('PI');    // also works fine
echo "\n";

// avoid this # sign for comment single line  , use  //  for single line comment

# $$ double variable print

$constant = "constant"; 

/**
 * using double variable technique. // $constant value is "constant" and we know there is a function constant() .
 * so we can use here as an function and called the constant variable PI .
 */

//echo "Hi,  PI = {$constant("PI")}";

echo "Value of PI is {$constant('PI')}" ;
