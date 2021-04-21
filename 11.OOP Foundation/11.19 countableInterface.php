<?php

// countable interface
// making our object countable implementing Countable interface
class DistrictsCollection implements IteratorAggregate, Countable {

    private $districts;

    function __construct(){
        $this->districts = array();
    }

    public function add($district){
        array_push($this->districts, $district);
    }

    public function view(){
        return $this->districts;
    }

    public function getIterator(){
        return new ArrayIterator($this->districts);
    }

    // method count() used for countable the array list
    public function count(){
        return count($this->districts);
    }
}

$districtsObj = new DistrictsCollection;

$districtsObj->add("Chittagong");
$districtsObj->add("Noakhali");
$districtsObj->add("Feni");
$districtsObj->add("Dhaka");

$_districts = $districtsObj->view();
foreach ($districtsObj as $district){   // iterating the objects
    echo "{$district}\n";
}

echo count($districtsObj);
