<?php

    // global variable
    // local variable
    // static variable

    $number = 10;   // this is global scope

    function doSomething(){
        /*now global $number variable will search outside of this block, Is there
        any global variable? Then it will take as a global,
        so it will print 10 now*/

//        global $number;

//        echo "{$number} \n";   // this is local scope of this function
        echo $GLOBALS['number'] ."\n";  // $GLOBALS is a super global variable
    }

    doSomething();

    // This is global variable
    echo $number ."\n";


    function doSome(){
        global $j;  // making global variable so, it will available from outside of this function block
        $j = 50;
    }

    doSome();

    echo  $j;   // this is from doSome() function

    echo PHP_EOL;

    function doExtra(){
        static $i = 0;
        $i++;
        echo $i ."\n";
    }

    function doMoreExtra(){
        static $k = 0;
        $k++;
        echo $k;
        echo PHP_EOL;
    }

    doExtra();
    doExtra();
    doMoreExtra();
    doExtra();
    doMoreExtra();


