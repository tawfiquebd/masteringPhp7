<?php

    $file = "\\PhpStorm Programming Works\\php7MasteringCourse\\7. File\\7.7 fileSerializeDataProcess\\file.txt";

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

//    file serialize unserialize data storing

//    $fp = fopen($file, 'w');
//
//    $data = serialize($students);
//
//    file_put_contents($file, $data);


// data append to the file

//    $fp = fopen($file, 'a');
//
    $people = array(
        array(
            'name'=>'Kamal',
            'lname'=>'Khan',
            'age'=>50,
            'cell'=>562036144
        )
    );

    // unserialize() and getting all data


    $dataFromfile = file_get_contents($file);

    $allStudents = unserialize($dataFromfile);

    print_r($allStudents);


//  serializing and pushing data

    array_push($allStudents, $people);

    $newData = serialize($allStudents);

    file_put_contents($file,$newData);




