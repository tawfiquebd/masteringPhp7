<?php

// custom error handler

// making custom error handler function

//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
//
//function customErrorHandler($severity, $msg, $file, $line){
//    echo "Error [{$severity}] : {$msg} in {$file} on line number {$line}. \n";
//}

// we can define error message for different types of severity
function customErrorHandler($severity, $msg, $file, $line){
    switch ($severity){
        case 2:
            echo "Error [Warning] : {$msg} in {$file} on line number {$line}. \n";
            break;

        case 8:
            echo "Error [Notice}] : {$msg} in {$file} on line number {$line}. \n";
            break;

        default:
            echo "Error [User Notice] : {$msg} in {$file} on line number {$line}. \n";
    }
}

set_error_handler('customErrorHandler',E_ALL);
// this function can't handle fatal errors

//trigger_error("This is an error");  // extra error message showing, triggering errors
//echo $result;

function divide($divident, $divisor){
    if(0 == $divisor){
        trigger_error("Divisor can't be zero");
    }
    else{
        return $divident / $divisor;
    }
}

echo divide(8,0);
