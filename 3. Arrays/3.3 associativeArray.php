<?php

    // Associative array
    // key and value
    // iteration with foreach loop

    $names = [
        10 => "tawfique",
        20 => "hossain",
        "language" => "Bangla English", "Hindi",
        "Phone" => 1850326262
    ];

    // total 5 elements in this associative array .
    // "Hindi" will count as different key value as 21 number key and value "Hindi"

//    print_r($names);    // print_r() for printing array data

    echo $names[10];    // tawfique // 10 is the key and tawfique is value
//    echo $names[0];   // it will not works here

    echo PHP_EOL;
    echo "Total array elements ".count($names);
    echo PHP_EOL;

    var_dump($names);
    echo PHP_EOL;

    // Best practice to print associative array, by foreach loop

    foreach ($names as $name){
        echo $name ."\n";
    }

    echo PHP_EOL;

    // we can also use for loop to print associative array. Before that we need to
    // know keys of their values

    $name = array_keys($names); // it returns all keys of array .
//    $name = array_values($names); // it returns all values of array .

    var_dump($name);

    for($i=0;$i<count($name);$i++){
        echo $names[$name[$i]] ."\n";   // $names is the array and $name[$i] is the key
    }



