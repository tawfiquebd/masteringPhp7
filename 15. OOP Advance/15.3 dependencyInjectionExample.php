<?php

// Dependency Injection Another Example

interface BaseStorage{
    function setFileName($fn);
    function writeData($data);
    function setMode($data);
}

class Storage implements BaseStorage{
    private $fn;
    private $mode;

    function __construct($fn, $mode = null){
        $this->setFileName($fn);
        $this->mode = $mode;
    }

    function setFileName($fn){
        $this->fn = $fn;
    }

    function writeData($data){
        file_put_contents($this->fn, $data, $this->mode);
    }

    function setMode($mode){
        $this->mode = $mode;
    }

}
//
//class DataManager{
//    function saveData($filename, $data){
//        // Strongly dependency here
//        $storage = new Storage($filename);
//        $storage->writeData($data);
//    }
//}

// Dependency Injection // Reduced dependency
// Single responsibility rules
class DataManager{
    function saveData(BaseStorage $storage, $data){
        $storage->writeData($data);
    }
}

//$dm = new DataManager;
//$dm->saveData(getcwd()."/demo/abcd.txt","Hello Bangladesh");

$st = new Storage(getcwd()."/demo/abcd.txt");
$st->setMode(FILE_APPEND);
//$st->setMode(null);
$dm = new DataManager;
$dm->saveData($st,"Hello World Bangladesh ");  // passing object here and data

