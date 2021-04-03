<?php

    // php array sorting function

    $fruits = array("Banana", "apple", "carrot", "Apple", "orange", "peanut", "dates", "banana");

    sort($fruits);  // normal sort / ascending order sort but Case sensitive
//    ksort($fruits);  // sorted by array index
//    krsort($fruits);  // reverse sort with array index
//    rsort($fruits);  // reverse sort / descending order sort
//    sort($fruits, SORT_NUMERIC);  // sorting order by array index
//    sort($fruits, SORT_LOCALE_STRING);  // Alphabet capital to small letter sort
//    sort($fruits,SORT_STRING | SORT_FLAG_CASE);  // Alphabet small to capital letter sort but Case insensitive

    print_r($fruits);

    $number = array(5, 9, 1, 33, 44, 14, 2, 1, 90, 64, 10, 2);

//    sort($number);  // number sorted by ascending order

//    asort($number);  // preserve original array index and sorted by array value ascending order

    ksort($number); // number sorted by array index/key

//    sort($number, SORT_STRING);  // number sorted by string ascending order


    print_r($number);

    // For loop print value sorted by index array
    for($i = 0; $i < count($number); $i++){
        echo "{$number[$i]}  "; // sorted and print by index 0 to 11 print
    }

    echo PHP_EOL;

    foreach ($number as $num){
        echo "{$num}  ";    // print and sorted by value ascending order
    }

    echo PHP_EOL;

    $newFruits = array ('b'=>"banana", 'm'=>"mango", 'c'=>"carrot", 'o'=>"orange");

//    sort($newFruits);   // sorted by array index
//    asort($newFruits);  // associative array key preserved and sorted by value ascending order
//    arsort($newFruits);  // associative array key preserved and sorted by value descending/reverse order
    ksort($newFruits);  // its also preserve array key But sorted by key/index

    print_r($newFruits);

    //    print by loop
    // ksort sorted by array index key
    foreach($newFruits as $newFruit){
        echo $newFruit ." \n";
    }

