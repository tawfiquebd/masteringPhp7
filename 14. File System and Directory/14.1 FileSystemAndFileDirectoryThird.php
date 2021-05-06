<?php

// Making a file system and directory class .

class Dir{

    private $directories = [];
    private $files = [];
    private $path;
    private $directoryObject = [];

    function __construct($path){
        $this->path = $path;
        $entries = scandir($path);
        foreach($entries as $entry){
            if("." != $entry && ".." != $entry){
                if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                    array_push($this->directories, $entry);
                }
                else{
                    array_push($this->files, $entry);
                }
            }
        }
    }

    function getDir($index){
        if(isset($this->directories[$index])) {
            if (!isset($this->directoryObject[$index])) {
                echo "creating new directory\n";
                $this->directoryObject[$index] = new Dir($this->path . DIRECTORY_SEPARATOR . $this->directories[$index]);
            }else{

                echo "using old directory\n";
            }
            return $this->directoryObject[$index];
        }
        else{
            throw new Exception("Directory doesn't exist!\n");
        }
        return false;
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

// created new directory
$newdir = $dir->getDir(1);  // Tree view of directory :  Dir\
print_r($newdir);               //                               ->Files\

$anotherdir = $dir->getDir(0);  // created new directory
print_r($anotherdir->getFiles());

$anotherdir = $dir->getDir(0);  // using old directory/object
print_r($anotherdir->getFiles());