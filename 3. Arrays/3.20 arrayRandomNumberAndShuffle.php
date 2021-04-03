<?php

    // mt_rand() // shuffle()

//    $numbers = range(1, 30,6);
//
//    print_r($numbers);
//
//    echo count($numbers)-1;

    $num = range(1, 20);

    $randomNumber = mt_rand(1,20);  // generating random number from 1 - 20

    echo $randomNumber;
    echo PHP_EOL;

    if($randomNumber % 2 == 0){
        echo "Head \n";
    }
    else{
        echo "Tail \n";
    }


    // another way is array shuffle();  // it changes the main variables value

    shuffle($num);

    print_r($num);

    $randomNum = $num[0];

    echo $randomNum;