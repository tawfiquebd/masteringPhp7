<?php

// Switch case operator

$n = 10;
$r = 10 % 2;

switch ($r){

    case 0:
        echo "{$n} is even number\n";
        break;

    default:
        echo "{$n} is not even number\n";
}

// Switch case operator example

$color = "red";

switch ($color){

    case 'red':
        echo "Red is my favorite color";
        break;
    case 'black':
        echo "Black is my favorite color";
        break;
    default:
        echo "Color is okay";
}

echo "\n";


// Switch case with multiple condition

switch ($color){

    case 'red':
    case 'black':
        echo ucfirst($color)." is my favorite color";
        break;

    default:
        echo "Color is okay";
}

echo "\n";

// It works like this

if("red" == $color || "black" == $color){
    echo ucfirst($color)." is my favorite color";
}
else{
    echo "Color is okay";
}