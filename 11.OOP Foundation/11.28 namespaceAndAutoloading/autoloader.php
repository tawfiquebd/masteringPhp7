<?php

// DIRECTORY_SEPARATOR  = /  its a default constant, returns a string "/"

spl_autoload_register(function($className){   // anonymous function
    $filename = strtolower(str_replace("CloudStorage\\","",$className)).".php";
    $path = str_replace("\\",DIRECTORY_SEPARATOR,$filename);
//    echo $path;
    include_once "{$path}";
//    die();
});