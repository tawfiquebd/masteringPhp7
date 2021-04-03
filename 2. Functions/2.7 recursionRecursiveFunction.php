<?php

    // Recursive function is a process which is called by itself repeatedly
    // To break/stop recursive function, we have to put a base case or breaking condition

    function printN($n){

        // Base case / Or breaking condition
        if($n > 10){
            return;
        }

        echo "{$n} \n";
        $n++;
        printN($n);
    }

    printN(1);

    echo PHP_EOL;

    // print numbers from start to end with stepping
    function printNumbers($start, $end, $stepping = 1){

        if($start > $end){
            return;
        }

        echo "{$start} \n";

        $start += $stepping;

        printNumbers($start, $end, $stepping);
    }

    printNumbers(5,20, 5);