<?php

    $string = "A quick brown fox Fox jumps over the lazy dog";

//The strpos() function finds the position of the first occurrence of a string inside another string.
//Note: The strpos() function is case-sensitive.
//Note: This function is binary-safe.

//    strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
//    stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)
//    strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)


    echo strpos($string, "fox");    // it returns the index starting number

    $isFound = strpos($string, "fox");  // case sensitive

    if($isFound){
        echo "\nThe word founds in the string!\n";
    }
    else{
        echo "\nThe word not founds in the string!\n";
    }


    // string "A" starts from 0 index.
    // it founds but it will treat as false . Because false == 0 equivalent
    // so we have to also check its type
    $stringIsFound = strpos($string, "A");

    if($stringIsFound !== false){
        echo "\nThe word founds in the string!\n";
    }
    else{
        echo "\nThe word not founds in the string!\n";
    }

    $string3 = "The quick Fox is Fox is running \n";

    // stripos()    its check for case-insensitive

    $string4 = stripos($string3, "fox",11); // we can also set offset, so now it will search from 11 no. index

    echo $string4;
    echo PHP_EOL;

    $strRevPos = strrpos($string3, "is");   // strrpos() will search from reverse of the string

    echo $strRevPos;
    echo PHP_EOL;

    $strReviPos = strripos($string3, "is"); // strripost() it will search from reverse but case insensitive

    echo $strReviPos;

