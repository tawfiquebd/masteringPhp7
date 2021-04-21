<?php

// Object to string conversion

class Color{

    public $color;
    public $props = "Random Property";

    function __construct($color){
        $this->color = $color;
    }

    function add($color){
        $this->color = $color;
    }

    /* __toString() is called when an object is passed to a
    function (esp echo() or print()) when its context is expected to be a string.
    Since an object is not a string, the __toString() handles the transformation
    of the object into some string representation.*/

    function __toString(){  // it returns string . It converts object to string
        return "The color is: {$this->color} \n";
    }
}

$colorObj = new Color("GREEN");
$colorObj->add("RED");
// object can't echo as string. We have to use __toString() magic method
echo $colorObj;    // __toString() method will be called now
echo "\n";

print_r($colorObj);
