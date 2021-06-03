<?php

// Error log discussion

//echo ini_get("error_log");  // to get error log file name from php.ini file

// we can create a new file to log our error OR we can send error log to a email .

$header = "From: system@admin.com";
$header .= "Content-Type: text/html; Charset=ISO-8859-1";

//error_log("This is an error message 3",1,"tawfique@admin.com",$header);

$date = date("d:M:Y H:j:s");
//echo $date;

// create a new file to log errors . c:/php/php_error_new.txt .
// All errors log will save to new destination file .
error_log("{$date} Log in a new file 4",3,"c:/php/php_error_new.txt");

