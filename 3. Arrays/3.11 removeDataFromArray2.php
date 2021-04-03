<?php

//splice_array()
// Extract/slice data from main array.  It will affect in main array .

$fruits = array("banana", "Apple", "Orange", "Dates", "Mango");

$random = array("a"=>"All", "b"=>"Ban", "c"=>"Can", 12=>"Approved","j"=>"jokes");

$splicedFruits = array_splice($fruits,0,3);

print_r($splicedFruits);    // spliced data

print_r($fruits);   // main array data also affected here .


// Another example

$banglaFruits = array("Kola", "Ankur", "Komola", "Malta", "Khejur");
$newData = array("Apple", "Badam", "Taal");

$newBanglaFruits = array_splice($banglaFruits, 0, 3, $newData);
// We can also insert here data. It will insert in main array $banglaFruits

print_r($newBanglaFruits);

print_r($banglaFruits); // Main array affecting because of $newData insertion data

