<?php

    $file = "\\PhpStorm Programming Works\\php7MasteringCourse\\7. File\\7.8 JsonFormatDataProcessing\\data.txt";

    $students = array(
        array(
            'fname'=>'Tawfique',
            'lname'=>'Hossain',
            'age'=>24,
            'cell'=>1850326262
        ),

        array(
            'fname'=>'John',
            'lname'=>'Doe',
            'age'=>25,
            'cell'=>1112233116
        ),

        array(
            'fname'=>'Maxwell',
            'lname'=>'Ferrari',
            'age'=>22,
            'cell'=>1852361561
        )
    );

    // making json data format
//    $jsonData = json_encode($students);
//    $data = file_put_contents($file, $jsonData);


    // json data decode format
    $data = file_get_contents($file);
//    $jsonDecodeData = json_decode($data);   // it will return as object data
    $jsonDecodeData = json_decode($data,true);   // now it will return as array data

    print_r($jsonDecodeData);


    // json data for using in javascript
//    var data = [{"fname":"Tawfique","lname":"Hossain","age":24,"cell":1850326262},{"fname":"John","lname":"Doe","age":25,"cell":1112233116},{"fname":"Maxwell","lname":"Ferrari","age":22,"cell":1852361561}]