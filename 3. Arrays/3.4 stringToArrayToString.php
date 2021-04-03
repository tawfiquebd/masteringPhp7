<?php

//    String to array conversion

    $food = "Biriyani, Chicken, Shawrma, Borhani";

//    echo $foods;

    // explode() = convert string to array.
    // It require 2 parameters, 1st one is delimiter and 2nd one is string

    $foods = explode(', ' , $food); // , comma with a space , it will remove those

    var_dump($foods);

//    if the string was "Biriyani, Chicken,Shawrma,Borhani"
//    then explode can't split ',' without spaces. Because our delimiter set to
//    remove comma with space, but here after Biriyani there was no spaces after comma
//    We can fix this issue , with preg_split() regular expression function. It
//    requires two parameter , 1st one is pattern(After every word which things should be split).
//    and 2nd one is string.

    $khana = "Goru, Murgi,Mach,Bhat";

    $khanas = preg_split('/(, |,)/' , $khana);

    var_dump($khanas);

//    Array to String Convert : implode()   or join() function . Both are same.
//    join() is a alias of implode() function. Both works same.
//    implode() / join() also require two parameter, 1st one is glue
//    (Every array element, join by some space, comma or other things)
//    and 2nd one is $array.

//    $khana = implode(', ',$khanas);
    $khana = join(', ', $khanas);

    var_dump($khana);
