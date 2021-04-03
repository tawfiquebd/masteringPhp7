<?php

    // Multi dimensional Array / Nested array


    // Here we made strings to array . 3 associative arrays inside $foods array
    $foods = [
        "bengali" => explode(', ' , "alu-bhorta, mosur-dal, ilish-bhaja, panta-bhat"),
        "indian"  => explode(', ' , "Hydrabadi-biriyani, indian-salad, pani-puri"),
        "japani"  => explode(', ' , "susi, mashroom, pan-cake, octopus-fry")
    ];

    print_r($foods);

    echo $foods['indian'][0];   // Will show Hydrabadi-biriyani

    echo PHP_EOL;

//    insert data in indian array foods list

    array_push($foods['indian'], "Chicken-Rejala");

    print_r($foods);
    echo PHP_EOL;

    //  Multidimensional / Nested array
    // (Associative array) Example

    $sample = [
        'test' => [
            'test-again' => [
                'a',
                'b',
                'c',
                'd'
            ],
        ],
    ];

    print_r($sample);
    echo $sample['test']['test-again'][2];  // will show 'c'

    echo PHP_EOL;
    echo PHP_EOL;


    // Indexed/Plain  multi-dimensional array example

    $numbers = [
        'basic' => [1, 2, 3],           // associative array
        [11, 22, 33],                   // indexed array
        [111, 222, 333],                // indexed array
        [1111, 2222, 3333, [4, 5, 6]],  // indexed array
    ];

    print_r($numbers);

    echo PHP_EOL;

    echo $numbers[2][3][1]; // will show 5

    echo PHP_EOL;

    echo $numbers['basic'][0];  // will show basic array data  1

    echo PHP_EOL;
