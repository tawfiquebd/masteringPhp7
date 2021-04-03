<?php

    // Array manipulation

    // Array is mutable . Mutable means data change kora jay
    //                    Immutable means data change kora jay na , Eg: Constant

    // shift    = Delete array element from top of the list
    // unshift  = Insert array element from top of the list
    // push     = Insert array element from last
    // pop      = Delete array element from last

    $names = [
      "Tawfique",
      "Hossain",
      "Green",
       2020,
      "University"
    ];

    $len = count($names);
    echo "{$len}\n";

    $names[3] = "University";   // data insert in array

    var_dump($names);
    echo PHP_EOL;

    $name = array_pop($names);  // array data delete from last index

    var_dump($names);
    echo PHP_EOL;

    array_push($names, "Dhaka");    // array data insert from last index
    $names[] = "Bangladesh";                 // array data insert from last index

    var_dump($names);
    echo PHP_EOL;

    array_unshift($names, "Name");  // array data insert from top of the list

    var_dump($names);
    echo PHP_EOL;


    $name = array_shift($names);    // array data delete from top of the list

    var_dump($names);
    echo PHP_EOL;

    echo $name;


