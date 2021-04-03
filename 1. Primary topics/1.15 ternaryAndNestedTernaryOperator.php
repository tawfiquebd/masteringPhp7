<?php

// Ternary Operator

$n = 10;

if($n == 12){
    echo "Its twelve\n";
}
else if($n == 10){
    echo "Its ten\n";
}
else{
    echo "Its a number\n";
}

echo $n == 12 ? "Its twelve" : "Its a number";  // Ternary Operator

echo "\n";

$result = ($n == 12) ? "Its twelve" : "Its a number";  // Ternary Operator holding in variable
echo $result;

echo "\n";

// Nested Ternary Operator  // multiple condition check

echo $n == 12 ? "Its twelve" : $n = 10 ? "Its ten" : "Its a number";  // Ternary Operator

echo "\n";

// Even Odd number check

$number = 121;

if($number % 2 == 0){
    echo "{$number} is a even number\n";
}
else{
    echo "{$number} is a odd number\n";
}

// Check using ternary operator

$check = ($number % 2 == 0) ? "{$number} is even" : "{$number} is odd";
echo $check;