<?php
// interface practical usage

/* Object iteration example 1 : using simple foreach
-------------------------------------------------- */

class myclass{
    private $var;
    protected $var1;
    public $x, $y, $z;

    public function __construct(){
        $this->var="private variable";
        $this->var1=TRUE;
        $this->x=100;
        $this->y=200;
        $this->z=300;
    }

    public function iterate(){
        echo "Object iteration:::::\n";
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }

}

/*  object iteration example 2 : Using IteratorAggregate interface
------------------------------------------------------------------- */

class DistrictCollection implements IteratorAggregate {

    private $districts;
    public $name;
    public $isWeekend;

    function __construct(){

        $this->districts = array();
    }

    public function add($district){

        array_push($this->districts, $district);
    }

    /*public function getDistricts(){

        return $this->districts;
    }*/

    // IteratorAggregate methods
    public function getIterator(){
        //ArrayIterator is like ArrayObject but it can iterate on itself. Also created by using new keyword
        return new ArrayIterator($this->districts); // passing array in Array Iterator Object
    }
}


// Object iteration example 1 : calling in main body

$obj = new myclass();

foreach($obj as $key => $value) {
    print "$key => $value\n";
}
echo "\n";

$obj->iterate();
echo "\n";

// Object iteration example 2 : calling in main body

$districtsObj = new DistrictCollection;

$districtsObj->add("Chittagong");
$districtsObj->add("Feni");
$districtsObj->add("Noakhali");


//$_districts = $districtsObj->getDistricts(); // we dont need this method anymore

foreach($districtsObj as $district){    // object iteration through foreach loop using getIterator()
    echo "{$district}\n";
}
