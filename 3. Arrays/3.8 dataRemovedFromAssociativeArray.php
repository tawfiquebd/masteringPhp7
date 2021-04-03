<?php


    $person = array("fname"=>"Tawfique", "lname"=>"Hossain");

    $students = array("Hello", "World");

    print_r($person);


    // Data removing from associative array

    unset($person['lname']);

    print_r($person);
    print_r($students);

    // Data removing from indexed array
    unset($students[1]);

    print_r($students);

