<?php
/*The sscanf() function parses input from a string according to a specified format.
The sscanf() function parses a string into variables based on the format string.

If only two parameters are passed to this function, then it will return as an array.
Otherwise, if optional parameters are passed, the data parsed are stored in them.
If there are more specifiers than variables to contain them, an error occurs.
However, if there are less specifiers than variables, the extra variables contain NULL.

sscanf(string,format,arg1,arg2,arg++)

printf() - outputs a formatted string
sprintf() - writes a formatted string to a variable */

$string = "Tawfique Hossain 01850326262 md.tawfiquectg@gmail.com";

$words = sscanf($string, "%s %s %11d %s"); // it will be returned as array

print_r($words);

echo PHP_EOL;

$str = sscanf($string, "%s %s %11d %s",$fname,$lname,$cell, $email);

echo "First name: ".$fname;
    echo PHP_EOL;
echo "Last name: ".$lname;
    echo PHP_EOL;
echo "Mobile: ".$cell;
    echo PHP_EOL;
echo "Email: ".$email;
    echo PHP_EOL;

$hex = "#FF2F44";   // color hex code

$decimalValue = sscanf($hex, "#%2x%2x%2x",$red,$green,$blue);

echo $red;
