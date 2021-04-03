<?php

    // array_reduce() function  — (looping) Iteratively reduce the array
    // to a single value using a callback function

//    $numbers = array(1, 2, 3, 4);
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

//    function sum($oldValues, $newValues){
//
//        return $oldValues+$newValues;
//    }

    // it work like this

    /*
     * sum(0 , 1)   // 1
     * sum(1 , 2)   // 3
     * sum(3 , 3)   // 6
     * sum(6 , 4)   // 10
     */

    function sum($oldValues, $newValues){

        if($newValues % 2 == 0){
            return $oldValues+$newValues;   // jor sonkhar jog fol .
        }

        return $oldValues;
    }

    // it also returns value

    $reducedData = array_reduce($numbers, "sum");   // it returns int data

    echo $reducedData;

//    var_dump($reducedData);   // int value returned

