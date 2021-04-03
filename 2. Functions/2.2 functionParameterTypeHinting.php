<?php

//    function parameter type hinting in PHP 7

    function factorial(int $n){
        $result = 1;
        for($i = 1; $i <= $n; $i++){
            $result *= $i;
        }
        return $result;
    }

    $x = 2;

    echo "Factorial of {$x} is ". factorial($x);
    echo PHP_EOL;



//    function parameter checking without type hinting

    function factorialNumber($m){
        if(gettype($m) != 'integer'){   // gettype() check data type
            return "invalid";
        }
        $result = 1;
        for($i = 1; $i <= $n; $i++){
            $result *= $i;
        }
        return $result;
    }

    $y = "abc";

    echo "Factorial of {$y} is ". factorialNumber($y);