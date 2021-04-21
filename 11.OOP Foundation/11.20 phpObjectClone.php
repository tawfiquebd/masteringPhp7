<?php

// php object clone , shallow copy

class Color{

    public $color;

    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}

class FavColor{

    public $data;
    public $color;  // Color class object

    function __construct($data, $color){
        $this->data = $data;
        // Color Class Object Created = $this->color is now object and passing value
        $this->color = new Color($color);   // color object

    }

    function updateColor($color){
        // $this->color (bject) and Accessing his method setColor(), and passing argument
        $this->color->setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;  // cloning color object newly //cloneOfClone
    }

}

$fc1 = new FavColor("Some data", "RED");
print_r($fc1);

$fc2 = clone $fc1;  // when use clone here, Its revoke/call the __clone() method above
print_r($fc2);

$fc2->updateColor("Green");
print_r($fc1);
print_r($fc2);