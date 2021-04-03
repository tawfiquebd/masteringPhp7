<?php

// Extract/slice data from array without affecting main array
// plain/indexed array example

$fruits = array('Apple','Orange','Banana','Jack-fruits','Palm','Dates','Mango');

var_dump($fruits);

//$extracted_array = array_slice($fruits,3); // start from index 3 to end index

//$extracted_array = array_slice($fruits,4,3); // start from index 4 to 3 elements

//$extracted_array = array_slice($fruits,-4,3); // start from last index, by negative value to 3 elements

$extracted_array = array_slice($fruits,3,3,true); // true for original index number

print_r($extracted_array);

//var_dump($fruits);


// associative array example

$assoc_array = array("a"=>"Apple", "b"=>"Ball", "c"=>"Cat",10,"d"=>"Doll",50);

$sliced_array = array_slice($assoc_array,1,3); // from index 1 to 2 index extract

print_r($sliced_array);

print_r($assoc_array);


$lang = array("B"=>"Bangla", "C"=>"Chines",  "E"=>"English", "Arabic", "Urdu");

$slicedLang = array_slice($lang,1,2,true);

print_r($slicedLang);

print_r($lang);


