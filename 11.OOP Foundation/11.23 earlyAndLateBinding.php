<?php
// Early static binding and Late static binding.

// Early Binding = If i have method in Parent class and extended child class , then it will bind the parent class method
//  = keyword : self

// Late Binding = If i have method of extended child class , then it will bind the child class method
// = keyword : static

class Planet{

//    static function echoName(){
//        echo self::getName();   // Early static binding, It will show us parent getName() method
//    }

    static function echoName(){
        echo self::getName();   // Late static binding, It will show us child getName() method
    }

    static function getName(){
        return "Parent Planet";
    }
}

class Earth extends Planet{

//    static function echoName(){
//        echo "Child Earth";
//    }

    static function getName()
    {
        return "Child Planet";
    }
}

Planet::echoName();// It will show us Parent Planet
echo "\n";
Earth::echoName();  // (In early binding, it will bind parent getName() method and print Parent Planet)
Earth::echoName();  // (In late binding, it will bind child getName() method and print Child Planet)