<?php

    // list() function can hold array elements as a single variable

    $numbers = array(10, 34, 56, 98, 20);

//    $red = $numbers[0];
//    $green = $numbers[1];
//    $blue = $numbers[2];
//    $yellow = $numbers[3];

    // we can use list() for this

    list($red, $green, $blue, $yellow) = $numbers;  // 4 variable passing so it will instantiate array elements

    echo $red;

    echo PHP_EOL;

    $students = array("First Name", "Last Name", "Age", "Mobile Number");

    list($f, $l, $a, $m) = $students;

    echo $f;