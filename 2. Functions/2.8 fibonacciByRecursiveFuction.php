<?php

    // Fibonacci series print by Recursive Function // 0 1 1 2 3 5 8 13

    function fibonacci($a, $b, $start, $end){

        if($start > $end){
            return;
        }

        $start++;

        echo "{$a} ";

        $_temp = $a + $b;
        $a = $b;
        $b = $_temp;

        fibonacci($a, $b, $start, $end);

    }

    fibonacci(0, 1, 1, 10);

    echo PHP_EOL;


    // Fibonacci series print by Recursive Function : METHOD 2

    function fibonacciByStatic($a, $b, $items){

        static $start;  // static variable

//        var_dump($start);

        $start = $start ?? 1;   // null coleasce operator php 7

        if($start > $items){
            return;
        }

        $start++;

        echo "{$a} ";

        $c = $a + $b;

        $a = $b;

        $b = $c;

        fibonacciByStatic($a, $b, $items);

    }

    fibonacciByStatic(0, 1, 10);

