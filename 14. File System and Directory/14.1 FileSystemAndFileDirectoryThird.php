<?php

// Making a file system and directory class .

class Dir{

    private $directories = [];
    private $files = [];

    function __construct($currentDir){
        $entries = scandir($currentDir);
        foreach($entries as $entry){
            if("." != $entry && ".." != $entry){
                if(is_dir($entry)){
                    array_push($this->directories, $entry);
                }
                else{
                    array_push($this->files, $entry);
                }
            }
        }
    }

    function getDirectory(){
        return $this->directories;
    }

    function getFiles(){
        return $this->files;
    }
}

$dir = new Dir(getcwd());

print_r($dir->getDirectory());
print_r($dir->getFiles());
