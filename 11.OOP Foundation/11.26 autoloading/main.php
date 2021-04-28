<?php

//include "bike.php";
//include "planet.php";
//include "spaceship.php";

// before php 7.2 __autoload() magic method . After 7.2 its now deprecated
//function __autoload($name){
//    include "{$name}.php";
//}


function autoload($name){
    if(strpos($name, "Planet_") !== false){
        $filename = str_replace("Planet_","",$name);
        include strtolower("planet/{$filename}.php");
    }
    else{
        include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');

(new Bike)->getType();
echo "\n";
(new Planet_Mars)->getName();
echo "\n";
(new Spaceship)->launch();
echo "\n";

