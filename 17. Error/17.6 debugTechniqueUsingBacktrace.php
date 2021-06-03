<?php

// Debug php code techniques using backtrace

// we will debug/trace which function calling step by step by using backtrace function

function x($a){
    y($a);
}

function y($b){
    z($b*2);
}

function z($c){
    if($c < 20){
        trigger_error("{$c} is too small \n");
    }
    else{
        echo "{$c} is okay \n";
    }
    // we can set arguments here , and limit how many backtrace record will  show here
    debug_print_backtrace();    // it will debug and trace which function called step by step
    // another way is
//    print_r(debug_backtrace()); // it will debug and trace as an array
}

function w($d, $e){
    x(($d+$e) * 5);
}

z(23);  // direct call

w(2,3);