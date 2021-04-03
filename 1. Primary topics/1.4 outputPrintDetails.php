<?php 

// php output system 
/**
 * data types:
 * int
 * double/float
 * string
 * boolean
 * null
 * array
 * object
 * reference
 */

$fname = "Tawfique";
$lname = " Hossain";

var_dump($fname,$lname);    // check data type and values

// Some printing type in php 

echo "Hello, My name is: $fname$lname \n";
echo "Hello, My name is: ".$fname .$lname."\n";

echo "Hello, My name is: ".$fname .$lname ."\n";     // {} will not work here  

echo "Hello, My name is: {$fname}{$lname} \n";   // {} will work only in double quote 

echo "Hi
My Full
Name
is 
Md. Tawfique Hossain
";  // echo can print multiple line text


// printf also same as echo , but has some difference 

printf("Hello my name is: $fname$lname\n");
printf("Hello my name is: %s %s ", $fname, $lname); // %s means string, its a specifier 

printf("\nHello, my %s is %s %s", "full name", $fname, $lname); // %s is using as now "full name"