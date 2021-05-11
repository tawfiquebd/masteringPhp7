<?php
//echo getcwd();
const FILENAME = "G:\\PhpStorm Programming Works\\php7MasteringCourse\\14. File System and Directory\\14.5 DirectoryIterator.php
";

echo pathinfo(FILENAME,PATHINFO_BASENAME);  // get basename/filename
echo pathinfo(FILENAME,PATHINFO_DIRNAME);  // get full path/directory name
echo PHP_EOL;
echo pathinfo(pathinfo(FILENAME,PATHINFO_DIRNAME), PATHINFO_BASENAME);  // get last folder/directory name / current directory
echo PHP_EOL;
echo pathinfo(FILENAME, PATHINFO_FILENAME);    // get filename without extension
echo PHP_EOL;
echo pathinfo(FILENAME, PATHINFO_EXTENSION);    // get file extension

// other way to get file extension
$parts = explode(".",FILENAME);
echo array_pop($parts);


