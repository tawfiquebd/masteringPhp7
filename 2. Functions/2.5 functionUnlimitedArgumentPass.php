<?php

                    // default parameter
    function doSum($num1=0, $num2=0, $num3=0) :int{

        return $num1+$num2+$num3;
    }

    echo doSum(5,3,2);
    echo PHP_EOL;
    // if argument list is empty, then default parameter value will be taken


    // multiple/unlimited parameter receiving here, It works like array
    function threeSum(...$numbers) :int{

        $result = 0;

        for ($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }
        return $result;
    }

    echo threeSum(20,30,40);
    echo PHP_EOL;


    // multiple/unlimited parameter receiving here, It works like array
    function sumOfNumbers(int $num1, int ...$numbers) :int{

        $result = 0;

        for ($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }
//        var_dump($numbers);
        return $result;
    }

    echo sumOfNumbers(20,30,40);
    // 20 num1 is first argument
    // 30, 40 is reference of $numbers. Its an array
    echo PHP_EOL;