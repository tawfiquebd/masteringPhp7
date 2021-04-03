<?php

// factorial number
/*
 *  5 = 5*4*3*2*1   = 120
 *  4 = 4*3*2*1     = 24
 *  3 = 3*2*1       = 6
 *  2 = 2*1         = 2
 *  1 = 1
 */


$n = 5;
$fact = 1;

for($i = $n ; $i > 1; $i--){
    $fact = $fact * $i;
}

echo $fact;

echo PHP_EOL;



$number = 4;
$fac = 1;

for($j = $number; $j > 1; $j--){
    $fac = $j * $fac;
}
echo $fac;