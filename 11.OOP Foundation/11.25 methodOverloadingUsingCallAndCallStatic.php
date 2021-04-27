<?php

// method overloading using magic method. __call() and __callStatic()
// __call() method use for access inaccessible method
class MotorCycle{

    private $parameter;

    function __construct($displacement, $capacity, $mileage){
        $this->parameter = [];
        $this->parameter['displacement'] = $displacement;
        $this->parameter['capacity'] = $capacity;
        $this->parameter['mileage'] = $mileage;
    }

    public function getDisplacement(){
        return $this->parameter['displacement'];
    }

    public function setDisplacement($displacement){
        $this->parameter['displacement'] = $displacement;
    }

    function __get($name){
        echo $this->parameter[$name];       // $this->parameter['displacement']
    }

    // setter
    function __set($name, $value){
        $this->parameter[$name] = $value;
    }

    // __isset()    magic method    // checking if the parameter is available or not
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

    // __call() method will be called when method is not exist ! but trying to access
    function __call($name, $arguments){

        if('run' == $name){
            if($arguments){
                echo "I am running at {$arguments[0]}\n";
            }
            else{
                echo "I am running\n";
            }
        }
    }

    // __callStatic() method will be revoke when a static non-exist method will be called
    static function __callStatic($name, $arguments){
        echo "Running non exist static method\n";
    }

}

$pulsar = new MotorCycle("150cc", "16ltr", "40kmph");

if(isset($pulsar->tiersize)){   // isset() function will revoke __isset() magic method
    echo "Found\n";
}
// unset property/array index
unset($pulsar->mileage);    // this function will revoke __unset() method

// __call() will revoke when there is no method exist !
$pulsar->run('100Kmph');

// __callStatic() method will revoke , when there is no static methoe exist!
MotorCycle::carwash();
