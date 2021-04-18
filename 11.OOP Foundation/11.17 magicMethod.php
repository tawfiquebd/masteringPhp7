<?php
    // magic method in php class

class Students{

    private $name;
    private $age;
    private $class;

    function __construct($name = '', $age = '', $class = ''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // magic method __get()
    public function __get($prop){   // $prop = property
        return strtoupper($this->$prop);
    }

    // magic method __set()
    public function __set($prop, $value){   // $property and its value
        $this->$prop = $value;      // $this->$prop // its parameter property
    }


//    public function getName(){
//        return $this->name;
//    }
//
//    public function setName($name){
//        return $this->name = $name;
//    }
//
//    public function getAge(){
//        return $this->age;
//    }
//
//    public function setAge($age){
//        return $this->age = $age;
//    }
//
//    public function getClass(){
//        return $this->class;
//    }
//
//    public function setClass($class){
//        return $this->class = $class;
//    }

}

$std = new Students("Rahim", 12, 2);
//echo $std->getName();
//$std->setName("Tawfique");
//echo $std->getName();

// passing name Rahim by class constructor parameter
echo $std->name;    // we can get/access now private $name property by magic method __get()
echo PHP_EOL;

$std->name = "Kamal";   // setting our value in private $name property, Its possible by magic method __set()
echo $std->name;        // getting out value from private $name property, by using magic method __get()
echo PHP_EOL;

echo $std->age;     // getting age value, by passing arguments in above class constructor and receiving by __get()
echo PHP_EOL;

$std->class = 9;    // set value by __set() magic method
echo $std->class;   // get value by __get() magic method
echo PHP_EOL;