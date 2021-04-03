<?php

    $file = "/PhpStorm Programming Works/php7MasteringCourse/7. File/7.4 someFIleModes/textfile.txt";

/*
"r+" - Read/Write. Starts at the beginning of the file
"w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
"a+" - Read/Write. Preserves file content by writing to the end of the file
"c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
*/

$fp = fopen($file, "r+");

$flines = fgets($fp);
echo $flines;
rewind($fp);
fwrite($fp, "Ankur");

$flines = fgets($fp);
echo $flines;
    rewind($fp);
fclose($fp);