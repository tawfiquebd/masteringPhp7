<?php 

$fName = "Md Tawfique";
$lName = "Hossain";

// printf() function only print any data, It doesn't return any values 

$fullName = printf("%s %s\n", $fName, $lName); // it will print

echo "{$fullName} \n";  // garbage value showing

// sprintf function 

$name = sprintf("%s %s\n", $fName, $lName);
// sprintf() function dont print any data, It just return the values as like function .

echo $name; // working fine . 
