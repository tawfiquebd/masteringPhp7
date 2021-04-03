<?php

// php 7
// null coalesce operator

$defaultLongitude = 23.5;

$userLongitude = 50.56;

// check by if else if user given value or not

//if(isset($userLongitude)){
//    $longt = $userLongitude;
//}
//else{
//    $longt = $defaultLongitude;
//}

// checking by ternary operator

//$longt = isset($userLongitude) ? $userLongitude : $defaultLongitude;


// checking by php 7 null coalesce operator
// it works like if else or ternary operator. its more shorthand
// and easy .
// if $userLongitude is true then return it other wise return defaultLongitude;

$longt = $userLongitude ?? $defaultLongitude;

//echo $longt;