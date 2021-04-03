<?php

// spaceship operator or Combined comparison operator
// php 7

$x = 9;
$y = 7;

//function greaterOrSmaller($x, $y){
//    if($x > $y){
//        return 1;
//    }
//    else if($x == $y){
//        return 0;
//    }
//    else{
//        return -1;
//    }
//}
//
//if(greaterOrSmaller($x, $y) == 1){
//    echo "{$x} is greater than {$y}\n";
//}
//else if(greaterOrSmaller($x, $y) == 0){
//    echo "{$x} and {$y} is equal\n";
//}
//else{
//    echo "{$x} is less than {$y}\n";
//}


// spaceship operator

/*
 * It is used to compare two expressions.
 * It returns -1, 0 or 1 when first expression is respectively
 * less than, equal to, or greater than second expression.
 */


//$result = $x <=> $y;

if(($x <=> $y) == 1){
    echo "{$x} is greater than {$y}\n";
}
else if(($x <=> $y) == 0){
    echo "{$x} and {$y} is equal\n";
}
else{
    echo "{$x} is less than {$y}\n";
}

