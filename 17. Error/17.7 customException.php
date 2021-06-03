<?php

// Custom exception

$person = [
    'name'=>'xyz',
    'id'=>'101',
    'age'=>'23',
    'sex'=>'M'
];

function processMaternityLeave($person){
    if(18 > $person['age']){
        throw new Exception("Too young");
    }
    else if('F' == $person['sex']){
        echo "Process";
    }
    else{
//        throw new Exception("Gender Mismatch");
        throw new GenderMismatchException($person); // our custom exception
    }
}

// Making our Custom Exception class
class GenderMismatchException extends Exception{
    private $person;

    function __construct($person){
        $this->person = $person;
        parent::__construct("Gender Mismatch\n");   // parent constructor. Exception class
    }
    function getDetailedMessage(){
        echo "Gender mismatch for Person with id {$this->person['id']}\n" ;
    }
}

try {
    processMaternityLeave($person);
}
catch (GenderMismatchException $e){
    echo $e->getMessage();
    echo $e->getDetailedMessage();
}
catch (Exception $e){
    echo $e->getMessage();
}
