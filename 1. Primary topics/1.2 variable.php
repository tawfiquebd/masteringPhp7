<?php

echo "Hello World \n";

echo 'Hello World'."\n";

echo 'Hello World \n'; // '' single quote escape special symbol
echo 'Hello $name';  // '' single quote escape special symbol

echo "\n";

$name = "Tawfique Hossain";
$age = 24;
echo "\n";

//echo 'Whats up ? This is $name \n';   // single '' quote doesn't detect any special symbol .

echo "My name is: $name and age is: $age \n";   // works fine

echo 'Hello '.$name." ".$age;   // works 

echo "My name is: {$name} and age is: {$age} \n";   // standard 

$word = 'age';

echo $$word;   

echo "\nHello {$$word} \n";    // double variable print. Php intelligently calling $age 

$n = "abul";
echo "$n"; // double quote always treat $n  $ this symbol as variable . 
// echo '$n';  // use '' single quote to escape this $ symbol as variable