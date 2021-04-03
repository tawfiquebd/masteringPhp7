<?php

    // array is a collection or list of variables

    $students = array(
        "Tawfique",
        "Mamun",
        "Tarek",
        "Sujon",
        "Opu",
        "2020"
    );

    echo $students[5];  // offset / index
    echo PHP_EOL;

    echo count($students);  // count() check total elements in array
    echo PHP_EOL;

    var_dump($students);
    echo PHP_EOL;

    $len = count($students);

//    Array traversing
    for($i=0;$i<$len;$i++){
        echo "{$students[$i]} \n";
    }

    echo "\n--------------\n";


    // array creating another way

    $members = [
        "Sohel",
        "Tawfique",
        "Karim",
        "Rahim"
    ];

    $len = count($members);

    // reversing array list

    for($j=$len;$j>0;$j--){
        echo "{$members[$j-1]}\n";
    }

