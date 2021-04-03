<?php

    $fruits = array("Apple", "Banana", "Orange", "Palm", "Dates");

    // Concatenate/Marge two array in single array

    // preserve key true na korle , array merge hobe na, karon both index same
    $someFruits1 = array_slice($fruits,0,2,true);
    // null use kora mane length sobgula data nibe
    $someFruits2 = array_slice($fruits,2,null,true);

    $mergedFruits = $someFruits1 + $someFruits2;

    print_r($mergedFruits); // array merged


    // Merging both array by function array_merge()

    $mergedByFunc = array_merge($someFruits1,$someFruits2);

    print_r($mergedByFunc); // merged by function array_merge()


    // If we use array_splice() we know that, it will affects data from main array
    // But array_slice() doesn't effect in the main array.

    $random = array("a"=>"alu","b"=>"ball","d"=>"doll",155=>"number","p"=>"phone","no"=>500);


    // correct way to merge data

    $r1 = array_slice($random,0,2,true);
    $r2 = array_slice($random,4,null,true);
    $r3 = array("j"=>12, "k"=>98);


    // Wrong way to merge/insert data by array_splice() , because we can't preserve array index

    $randomMerge = array_splice($random,2,2, array("v"=>21, "x"=>81));


    $randomMergeCorrectWay = $r1+$r3+$r2;


    print_r($random);   // array index preserve hoy nai ekhane .

//    print_r($randomMerge);  // jegula extract kore baad disi

    print_r($randomMergeCorrectWay);    // correct way printing here with preserve data