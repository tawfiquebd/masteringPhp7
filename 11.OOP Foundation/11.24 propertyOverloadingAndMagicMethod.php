<?php

// property overloading and magic method . __isset() and __unset()

class MotorCycle{

//    private $displacement, $capacity, $mileage;
    private $parameter;

//    function __construct($displacement, $capacity, $mileage){
//        $this->displacement = $displacement;
//        $this->capacity = $capacity;
//        $this->mileage = $mileage;
//    }

    function __construct($displacement, $capacity, $mileage){
        $this->parameter = [];
        $this->parameter['displacement'] = $displacement;
        $this->parameter['capacity'] = $capacity;
        $this->parameter['mileage'] = $mileage;
    }

//    public function getDisplacement(){
//        return $this->displacement;
//    }
//
//    public function setDisplacement($displacement){
//        $this->displacement = $displacement;
//    }

    public function getDisplacement(){
        return $this->parameter['displacement'];
    }

    public function setDisplacement($displacement){
        $this->parameter['displacement'] = $displacement;
    }

    // property overloading // magic method
//    function __get($name){
//        echo $this->$name;       // $this->displacement // private property accessing
//    }

    // __get() will be called/revoke when private inaccessible property try to access
    function __get($name){
        echo $this->parameter[$name];       // $this->parameter['displacement']
    }

    // setter
    function __set($name, $value){
        $this->parameter[$name] = $value;
    }

    // __isset()    magic method    // checking if the parameter is available or not
    // __isset() will be called when a property will be check via isset() function
    function __isset($name){
        if(!isset($this->parameter[$name])){
            echo "{$name} is not found\n";
            return false;
        }
        return true;
    }

    // __unset()    magic method    // unset property internally
    function __unset($name){
        print_r($this->parameter);
        unset($this->parameter[$name]);
        print_r($this->parameter);
    }
}

$pulsar = new MotorCycle("150cc", "16ltr", "40kmph");
//echo $pulsar->getDisplacement();  // private property accessing via magic method.

//echo $pulsar->getDisplacement();

$pulsar->displacement = "160cc";    // private property setting value via method __set()
echo $pulsar->displacement; // private property accessing via magic method __get()

echo PHP_EOL;

if(isset($pulsar->tiersize)){   // isset() function will revoke __isset() magic method
    echo "Found\n";
}
//echo $pulsar->tiresize; // undefined property accessing

// unset property/array index
unset($pulsar->mileage);    // this function will revoke __unset() method


