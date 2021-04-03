<?php

    $name = ""; // its a empty value, but its showing value is set. We have to handle this

//    isset() functions check weather the value is set or not
//    Checking the value is set or not
    if (isset($name)){
        echo "Value is set\n";
    }
    else{
        echo "Value is not set\n";
    }

//    Handling empty value  // it will count (0) $name = 0 as empty value
    if(empty($name)){
        echo "Name is empty\n";
    }
    else{
        echo "Name is not empty\n";
    }

//    Handling empty value, with both function at a time

    if(isset($name)){

    }


    $num = null; // its not a empty value, but its showing value is not set. We have to handle this


//  Handling empty value and the value with 0

    if(isset($num) && (is_numeric($num) || !empty($num) )){
        echo "\$num is set and it's not empty! \n";
    }
    else{
        echo '$num is either not set or it\'s empty '."\n" ;
    }


