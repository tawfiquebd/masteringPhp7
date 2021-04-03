<?php

// use bracket for unexpected result .

$n = 10;

$result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "C") ;

echo $result;
echo PHP_EOL;

$result = ($n % 2 == 0) ? "A" : (($n == 1) ? "ODD" : (($n == 11) ? "B" : "C")) ;

echo $result;