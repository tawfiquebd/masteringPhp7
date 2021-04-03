<?php

$file = "/PhpStorm Programming Works/php7MasteringCourse/7. File/7.1 readDataFromFile/file.txt";

// checking the file is readable or not. its optional .
if(is_readable($file)) {

    //echo getcwd();  // for get directory of the current file


    $fp = fopen($file, 'r'); // fopen() open the file

    // 5 for length
    $line = fgets($fp, 5);    // fgets() read a single line , $file and length parameter

    echo $line;

    while ($line = fgets($fp)) {
        echo $line;
    }

//    rewind($fp);    // This function moves the file pointer to the top position from the current position
    fseek($fp, 0); //This function moves the file pointer from its current position to a new position,

    while ($line = fgets($fp, 6)) {
        echo $line . "-";
    }
//$fileGetContents = file_get_contents($file);    // read the whole file

//echo $fileGetContents;

    fclose($fp);    // fclose() close the file


    $data = file($file);    // file() function returns the file as array of each elements

    print_r($data);
    echo $data[2];  // print by array offset

}
