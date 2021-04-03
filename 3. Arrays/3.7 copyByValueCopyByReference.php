<?php

    $person = array("fname"=>"Tawfique", "lname"=>"Hossain");

    // This is copy by value
    // OR deep copy

    $newPerson = $person;

    $newPerson["lname"] = "Mohammed";

    print_r($person);
    print_r($newPerson);


    // This is copy by reference
    // OR shallow copy
    // ampersand copy the memory location / reference of the variable. So, If we change
    // in the copied variable , it will change in main variable
    function printData($data){ // passing reference here by & ampersand
//        $data["lname"] = $data["lname"]." changed";
        $data["lname"] .= " changed";
        print_r($data);
    }

    printData($person);
    print_r($person);