<?php

    // range()  function also works like as loop

    // first parameter is beginning part
    // second parameter is ending part
    // third parameter is stepping part

    $numbers = array();   // empty array

//    for($i = 0; $i < 10; $i++){
//        $numbers[$i] = $i;
//    }
//
//    for($i = 0; $i < 10; $i++){
//        echo $numbers[$i] . " \n";
//    }

    echo "\n";

    for($j = 0; $j < 10; $j++){
        array_push($numbers, $j);   // inserting/assigning array elements
    }

    print_r($numbers);

    // another method is range()

    $evenNumbers = range(0, 10, 2);

    print_r($evenNumbers);


    foreach(range(10, 20, 2) as $evenN){

        echo "Even number: ". $evenN ."\n";
    }


