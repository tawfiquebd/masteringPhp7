<?php
// php object to json data encode
// json encode only class er public property er jonno hobe.. kono publilc method,
// public property, private property, private method, static property json encode hobena

class Person{
    public $name;
    public $email;
    private $age;

    public function sayHi(){
        echo "hello";
    }
}

$person = new Person();
$person->name = "john doe";
$person->email = "john@doe.com";

$data = json_encode($person);
echo $data;
