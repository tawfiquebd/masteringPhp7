<?php

// fibonacci series
// 0 1 1 2 3 5 8 13 21 34 .............

    $a = 0;
    $b = 1;
    $c = 1;

    for($i = 1; $i <= 10; $i++){

        echo $a." ";
        $c = $a + $b;
        $a = $b;
        $b = $c;

    }

