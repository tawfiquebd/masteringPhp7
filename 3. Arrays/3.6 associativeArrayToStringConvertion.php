<?php

//    Associative Array

    $student = [
        'fname' => "Tawfique",
        'lname' => "Hossain",
        'age'   => 24,
        'class' => "B.Sc.",
        'section' => "EC"
    ];

    print_r($student);

    echo "Full name is: {$student['fname']} {$student['lname']}";
    echo "\n";

    printf("Full name is: %s %s\n", $student['fname'], $student['lname']);


//    Associative array to string convertion

//    $converted = join(" ", $student);
//    echo $converted;
    /*
    Its converted to string, but its not clear ,
    which value is printing for which variable/array key
   */

//    We will use serialize() or json_encode()
// serialize() understand only in php. But json_encode() is understand also in javascript
// Because it gives data as json format (javascript object notation)

    $convertedData = serialize($student);
//    echo $convertedData;
//    echo "\n";

//    Making unserialize/array (previous data)
    $previousArrayData = unserialize($convertedData);

    var_dump($previousArrayData);


//    Another method is json_encode() to convert associative array to string as like serialize();

    $jsonEncodedString = json_encode($previousArrayData);
    echo $jsonEncodedString;    // its converted to string now
    echo PHP_EOL;


//    Another method to convert string to associative array is json_decode()

    $jsonDecodedArray = json_decode($jsonEncodedString,true);
    // It returns ass class objects data, But we need to return it as array data , so using true parameter

    print_r($jsonDecodedArray);




