<?php

// Method chaining

class StringUtility{

    private $string;
    private $search;

    function __construct($string){
        $this->string = $string;
    }

    function search($string){
        $this->search = $string;
        return $this;
    }

    function replace($string){
        $this->string = str_replace($this->search,$string,$this->string);
        return $this;
    }

    function upperCase(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    function lowerCase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }
}

$stobj = new StringUtility("Hello World");
$stobj->search("World")->replace("Bangladesh")->upperCase()->print();
