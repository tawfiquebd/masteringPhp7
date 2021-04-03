<?php

// factorial of a number

$factorial = 1;
$n = 5;
$j = 1;

for($i = $n; $i > 1; $i--){

    $factorial = $factorial * $i;
    $j++;
}

printf("Factorial of a %d is: %d\n", $n, $factorial);
printf("Total operation is: %d\n", $j);

echo PHP_EOL;

// Bad code / Dumb code
// factorial from 1 to 10

$n = 20;
$j = 1;
for($i = 1; $i <= 20; $i++){

    $fact = 1;

    for($n = $i; $n > 1; $n--){
        $j++; // total operation
        $fact = $fact * $n;
    }
    printf("Factorial of %d is %d\n", $i, $fact);
}
printf("Total operation is: %d\n", $j);


// Good code / Smart code
// factorial from 1 to 10

echo PHP_EOL;

$result = 1;
$j = 1;

for($i = 1; $i <= 20; $i++){
    $result = $result * $i;
    $j++;   // total operation
    printf("Factorial of %d is %d\n", $i, $result);
}
printf("Total operation is: %d\n", $j);
