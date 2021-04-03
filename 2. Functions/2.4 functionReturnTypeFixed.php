<?php

    // Function return type fixed set
    // return type use korle, return must korte hobe

    function twoSum(int $number1, int $number2) : int{ // return type set integer
//        return "abc";         // will show fatal error, return type must be int
        return $number1+$number2;
    }

    echo twoSum(5, 6);