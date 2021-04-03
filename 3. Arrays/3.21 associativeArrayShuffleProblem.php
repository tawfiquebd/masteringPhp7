<?php

    // array shuffle() problem in associative array

    $fruits = array("A"=>"Apple", "B"=>"Banana", "C"=>"Carrot", "D"=>"Dates");

    shuffle($fruits);   // its changes the main array data . and It can't preserve array key

    print_r($fruits);   // its shuffling but we lost our key .


    // another way to shuffle array key is array_rand()

    $key = array_rand($fruits);

    echo " [$key] => "; // shuffle array key

    echo $fruits[$key]; // print value with array key

    echo PHP_EOL;
    echo PHP_EOL;

    foreach ($fruits as $fruit){
        echo $fruit ." \n";
    }

    echo PHP_EOL;

    // we can also copy our main array to temporary array so that we can shuffle
    // the temporary array without loosing our main array data
    // example;

    $student = array(
        "First Name"=>"Md Tawfique",
        "Last Name"=>"Hossain",
        "Age"=>24,
        "Phone Number"=>1850326262
        );

    $_tempStudent = $student;

    $keyonly = array_rand($_tempStudent);

    echo $keyonly;
    echo PHP_EOL;
    echo PHP_EOL;

    shuffle($_tempStudent);

    print_r($_tempStudent); // value showing from temp array


    print_r($student);  // main array is ok . because we copied main array to temp array

