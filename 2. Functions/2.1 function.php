<?php

/*
 * Function name should be meaningful
 * Function is a block of codes and system to make code reusable
 */

//function definition
function isEven($n){    // parameter
    // function body
    if($n % 2 == 0){
        return true;
    }
    return false;
}

$x = 12;

if(isEven($x)){ // passing argument
    echo "{$x} is a even number";
}
else{
    echo "{$x} is a odd number";
}

