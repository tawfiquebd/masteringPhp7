<?php
echo "\n";

$fname = "Tawfique";
$lname = "Hossain";
// variable swapping by using argument number . this is called placeholder 
printf('%2$s %1$s ', $fname, $lname); // we know " " double quote always treat $ this symbol as variable ,
// So we are using '' single quote to escape this $ variable
echo "\n";

// number system print
printf("The number is %d equivalent to %b\n", 10, 10 );
//  number system using placeholder
printf('The number is %1$d equivalent to %1$b', 10 );
// using single quote here . cz we know " " double quote will take $d as variable. and argument number 1
echo "\n";
echo "\n";

$num1 = 10.236;
printf("%.2f\n", $num1);
echo "\n";

// showing in integer number 5 place or my own place
$num2 = 123;
$num3 = 21;

printf("%05d \n", $num2);
printf("%05d \n", $num3);
echo "\n";

// showing float values before decimal and after decimal value

$n1 = 123.3253;
$n2 = 27.155;

printf("%07.2f \n", $n1); 
printf("%07.2f \n", $n2);
