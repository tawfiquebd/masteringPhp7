<?php

//    Function default value or Optional parameter set

    // first parameter e default value set korle, second parameter default
    // value set kora lagbe.
    function serve($foodType, $numberOfItems = 1){ //default parameter

        echo "{$numberOfItems} cups of {$foodType} have served\n";
    }

    $type = "Coffee";
    $number = 2;

    serve($number);

    // argument 1 ta pass korle seta aga 1st parameter hisebe dhore ney..
    // kono argument pass na korle, function definition er default parameter pay