<?php

    // Factorial by Recursive Function

    // 5 = 5 x 4 x 3 x 2 x 1 = 120
    // 4 = 4 x 3 x 2 x 1 = 24
    // 3 = 3 x 2 x 1 = 6
    // 2 = 2 x 1 = 2
    // 1 = 1 = 1

    function factorialByRecursion($n){

        if($n <= 1){
            return 1;
        }

        return $n * factorialByRecursion($n - 1);

    }

    echo factorialByRecursion(5);
