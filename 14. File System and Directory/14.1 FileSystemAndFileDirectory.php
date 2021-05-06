<?php

// File system and File directory in php

//echo getcwd();  // get current directory

// to see all files and folder under current directory
$entries = scandir(getcwd());
//print_r($entries);
// Getting all current directory and folders
foreach ($entries as $entry){
    if("." != $entry && ".." != $entry){
        if(is_dir($entry)){
            echo "[d] {$entry}\n";
        }
        else{
            echo "[f] {$entry}\n";
        }
    }
}

// make a function to count, how much directory has in this current directory
function countDir($dir){
    $count = 0;
    $entries = scandir($dir);
    foreach ($entries as $entry){
        if("." != $entry && ".." != $entry){
            if(is_dir($entry)){
                $count++;
            }
        }
    }
    return $count;
}
echo countDir(getcwd());    // there has only 0 directory in this current directory