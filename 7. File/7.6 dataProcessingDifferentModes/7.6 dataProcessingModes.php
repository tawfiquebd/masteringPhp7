<?php

    $file = "\\PhpStorm Programming Works\\php7MasteringCourse\\7. File\\7.6 dataProcessingDifferentModes\\file1.txt";

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

    $fp = fopen($file, 'w');

//     write data into file

    foreach($students as $student){
        $writeFile = sprintf("%s %s %s %s \n", $student['fname'], $student['lname'], $student['age'], $student['cell']);
        fwrite($fp, $writeFile);
    }


    // write data into file by csv function
//    $fp = fopen($file, 'w');
//
//    foreach($students as $student){
//        fputcsv($fp, $student);
//    }

    // csv = comma separator value

    // read data from file  csv function
//    $fp = fopen($file, 'r');
//    while($student = fgetcsv($fp)){
//        printf("Name : %s %s\nAge : %s\nCell : %s \n\n", $student[0], $student[1], $student[2], $student[3]);
//    }

    // read data from file

//    while($data = fgets($fp)){
//        $student = explode(',',$data);
//        printf("Name : %s\nAge : %s\nCell : %s \n\n", $student[0], $student[1], $student[2]);
//    }

//    file() this one treat every line as an array element
//
    $data = file($file);


//    removing data from file
    unset($data[1]);

    $fp = fopen($file, 'w');
    foreach ($data as $line){
        fwrite($fp,$line);
    }

    print_r($data);

//    fclose($fp);

