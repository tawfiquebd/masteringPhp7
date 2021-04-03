<?php

// Leap year check

/**Algorithm 1:
 *
 * divisible by 400 == true -> leap year
 * divisible by 100 == true -> not leap year
 * divisible by 4 == true   -> leap year
 * then its leap year
 * otherwise its not leap year
 *
 * Algorithm 2:
 *
 * (divisible by 400 == true OR divisible by 100 != true) && (divisible by 4 == true) -> leap year
 * otherwise its not leap year
 *
 * Algorithm 3:
 * (divisible by 400 == true AND divisible by 100 == true) OR (divisible by 4 == true) -> leap year
 * otherwise its not leap year
 *
 *
**/

$year = 2020;

// Method 1

if($year % 400 == 0){
    echo "{$year} is a leap year\n";
}
else if($year % 100 == 0){
    echo "{$year} is not a leap year\n";
}
else if($year % 4 == 0){
    echo "{$year} is a leap year\n";
}
else{
    echo "{$year} is not a leap year \n";
}

// For method 2 and method 3 understand how true false works in if else condition

if((true || false) && true){
    echo "wow\n\n";
}


// Method 2

if(($year % 400 == 0 || $year % 100 != 0) && $year % 4 == 0){
    echo "{$year} is a leap year\n";
}
else{
    echo "{$year} is not a leap year \n";
}

echo "\n";


// Method 3

if(($year % 400 == 0 && $year % 100 == 0) || $year % 4 == 0){
    echo "{$year} is a leap year\n";
}
else{
    echo "{$year} is not a leap year \n";
}

