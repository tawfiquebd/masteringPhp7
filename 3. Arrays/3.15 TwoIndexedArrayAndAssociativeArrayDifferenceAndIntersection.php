<?php

    // Array intersection and difference between two array

    $number1 = array(10, 5, 38, 90, 2, 43, 3 , 9, 14);
    $number2 = array(67, 5, 93, 14, 2, 55, 3 , 0, 18);

    $fruits1 = array('a'=>"apple", 'p'=>"papeya", 'm'=>"mango", "o"=>"orange", 'w'=>"watermelon");
    $fruits2 = array('k'=>"komola", 'b'=>"boro-apple", 'w'=>"watermelon", "a"=>"apple");

    // checking common elements from both array, common elements gula dekhabe
    // intersection mane common element gula

    $common = array_intersect($number1, $number2);  // number1 e ja value ache , ta ki number2 te ache kina check kore
//    $common = array_intersect($number2, $number1);  // number2 e ja value ache , ta ki number1 te ache kina check kore

    print_r($common);

    // array_intersect_assoc() array key and value 2 tai check korbe
    $commonWithKey = array_intersect_assoc($number1, $number2);

    print_r($commonWithKey);

//    $commonFruits = array_intersect($fruits1, $fruits2);
    $commonFruitsWithKey = array_intersect_assoc($fruits1, $fruits2);

    print_r($commonFruitsWithKey);


//    check difference between two arrays, different element gula show korbe

    $diffNumber = array_diff($number1, $number2);
    $diffNumberWithKey = array_diff_assoc($number1, $number2);  // check difference both key and value

    print_r($diffNumberWithKey);

    $diffFruits = array_diff($fruits1, $fruits2);
    $diffFruitsWithKey = array_diff_assoc($fruits1, $fruits2);

    print_r($diffFruitsWithKey);
