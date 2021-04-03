<?php

    $numberList = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    function square(int $n){

        printf("%d square is %d \n", $n ,$n*$n);
    }

    // array walk function . Its looping through array elements . It doesn't return anything
    // array_walk() amader function er upor depend kore kaaj kore .
    // square holo array_wal() er jonno callback function

    array_walk($numberList, 'square');

    echo PHP_EOL;

    print_r($numberList);   // main array is ok


    function cube(int $n){
        return $n*$n*$n;
    }

    //array map function . Eita o amader function er upor base kore kaj kore
    // array_map() er moddhe jei function parameter pass korbo, oita arra_map()
    // er jonno callback function. It also works like array_walk() function But
    // But it returns a new array, wherever array_walk() doesn't return anything
    // array_map on the other hand, it accepts multiple arrays as arguments.
    $newArray = array_map("cube", $numberList);

    print_r($newArray);

    print_r($numberList);   // main array is ok


    // working with array_filter() . It also returns array
    // array filter // it also works like array_map
    // whatever the callback returns is treated as a boolean.

    function even(int $n){
        return $n % 2 == 0; // function jodi true return kore tahole
    }
    function odd(int $n){
        return $n % 2 != 0;
    }

    $evenNumbers = array_filter($numberList,"even");    // it also returns array
    $oddNumbers = array_filter($numberList,"odd");

    print_r($oddNumbers);

    print_r($numberList);   // main array is ok


    $names = array("shahin", "mamun", "tarek", "sohel", "tawfique", "sujon");

    function nameStartWithS($name){
        return $name[0] == 's' ;    // matching s character and returning it
    }

    $nameWithS = array_filter($names, "nameStartWithS");

    print_r($nameWithS);

    print_r($names);    // main array

