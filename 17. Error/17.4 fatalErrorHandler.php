<?php

// Error report display off
ini_set("display_errors",0);
ini_set("display_startup_errors",0);

ini_set("memory_limit",'1M');   // allocating memory 1MB here


// Fatal error handler
// register_shutdown_function() evoke when all scripts reading finished if it is get error or not.
register_shutdown_function('fatalErrorHandler');

function fatalErrorHandler(){
    $error = error_get_last();  // get the last occurred error
    if($error){
        echo "Fatal Error";
    }
}

//no_function();  // No function definition or body , so it will throw a fatal error.

echo str_repeat("*",2**31); // 2(pow)31 exhaust our 1MB memory limit. throw a fatal error



