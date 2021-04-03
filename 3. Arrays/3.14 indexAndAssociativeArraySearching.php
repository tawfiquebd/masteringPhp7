<?php

    // php array searching function

    $fruits = array('a'=>'apple', 'c'=>'carrot', 'm'=>'mango', 'b'=>'banana', 'o'=>'orange');

    $numbers = array(1, 2, 4, 21, 46 , 3, 5, 2, 2, 30, 10, 1, 5);

    // searching in array

    if(in_array('carrot',$fruits)){   // strict : true, data type o check korbe
        echo "carrot is found in array \n";
    }

    if(in_array('5',$numbers,true)){   // strict : true, data type o check korbe
        echo "5 is found in array \n";
    }


    // getting array value of key/index

    $foundKey = array_search('5', $numbers);    // it also has strict: true check
    echo $foundKey;

    echo PHP_EOL;

    // if key exist in array check function

    if(key_exists(5, $numbers)){
        echo "key has found in this array \n";
    }


