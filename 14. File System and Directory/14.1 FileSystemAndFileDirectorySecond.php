<?php

// Another way to get file directory

$entries = opendir(getcwd());
while(false !== ($entry = readdir($entries))){
    echo "{$entry} \n";
}