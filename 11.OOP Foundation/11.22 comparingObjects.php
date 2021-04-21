<?php

// objects compare

class Planet{

    public $name;

    function __construct($name){
        $this->name = $name;
    }

}

$planet = new Planet("Earth");
$planet2 = new Planet("Earth");

// === three equal sign means : It checks the value and data type too .
if($planet === $planet2) echo "Same object\n";
else echo "Not same object\n";

