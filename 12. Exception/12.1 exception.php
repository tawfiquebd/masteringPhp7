<?php

// exception handling

class Student{

    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        if($age < 4){
            throw new Exception("Too Young!", 1000);
        }
        else if($age > 30){
            throw new Exception("Too Old!", 1001);
            // if exception found here then under this block code won't run
        }
//        echo "Run here\n";    // this code will never run , if previous exception found
        $this->age = $age;
    }
}

try {
    $s = new Student("Tawfique", 32);
}
catch (Exception $e){
    echo $e->getCode()." : ".$e->getMessage().PHP_EOL;
}
//finally{    // optional block.
//    echo "finally() block is optional\n";
//}
