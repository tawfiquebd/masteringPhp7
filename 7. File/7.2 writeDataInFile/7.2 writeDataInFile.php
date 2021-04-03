<?php

    $file = "/PhpStorm Programming Works/php7MasteringCourse/7. File/7.2 writeDataInFile/file.txt";

if(is_writable($file)) { // check if the file is writable then , it will write


//    $files = file_get_contents($file);

//    $fp = fopen($file, "w");      // write a file for one time write.
    $fp = fopen($file, "a");    // append a file from previously written a file

//    fwrite($fp, "Hello World\n");

//    fwrite($fp, $files);

    fwrite($fp, "Learning php\n");

    fclose($fp);

}

// in php forward slash / means a files/folder directory or path

// $path = "/PhpStorm Programming Works/php7MasteringCourse;


// But in windows backward slash \ means a files/folder directory

// $path = "c:\PhpStorm Programming Works\php7MasteringCourse;

// If we want to use windows mode path or directory in php projects then we cannot use
// it. because backslash \ means another thing in php . So, we have to escape the
// backslash by another backslash . Total 2 backslash.  example given below :

// $path = "c:\\PhpStorm Programming Works\\php7MasteringCourse;