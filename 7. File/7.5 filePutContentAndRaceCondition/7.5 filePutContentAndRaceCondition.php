<?php

    $file = "/PhpStorm Programming Works/php7MasteringCourse/7. File/7.5 filePutContentAndRaceCondition/file.txt";
/*
    The file_put_contents() writes data to a file.

This function follows these rules when accessing a file:

    If FILE_USE_INCLUDE_PATH is set, check the include path for a copy of filename
    Create the file if it does not exist
    Open the file
    Lock the file if LOCK_EX is set
    If FILE_APPEND is set, move to the end of the file. Otherwise, clear the file content
    Write the data into the file
    Close the file and release any locks*/

    $fileHandle = file_put_contents($file, "\nBangladesh",FILE_APPEND|LOCK_EX);
    $fileHandle = file_put_contents($file, "\nAmerica",FILE_APPEND|LOCK_EX);

