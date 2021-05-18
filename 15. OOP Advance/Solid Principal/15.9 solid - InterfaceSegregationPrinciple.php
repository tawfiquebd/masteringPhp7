<?php

// Solid - Interface Segregation Principle

// Bad design code example

//interface vehicle{
//    function twoWheeler();
//    function fourWheeler();
//    function sixWheeler();
//    function getMileage();
//    function getName();
//    function getPrice();
//}
//
//// MotorCycle doesn't have four or six wheel. Its a bad design pattern.
//class MotorCycle implements vehicle{
//    function twoWheeler(){
//
//    }
//    function fourWheeler(){
//
//    }
//    function sixWheeler(){
//
//    }
//    function getMileage(){
//
//    }
//    function getName(){
//
//    }
//    function getPrice(){
//
//    }
//}

// Solid - Interface Segregation principle
// We will differentiate an Interface in different part. So, that we can implement appropriate
// interface in our class
// example:
interface Vehicle{
    function getName();
    function getPrice();
    function getMileage();
}

interface TwoWheelers{
    function twoWheel();
}

interface FourWheelers{
    function fourWheel();
}

interface SixWheelers{
    function sixWheel();
}

class MotorCycle implements Vehicle, TwoWheelers{
    function getName(){

    }
    function getPrice(){

    }
    function getMileage(){

    }
    function twoWheel(){

    }
}

class Car implements Vehicle, FourWheelers {
    function getName(){

    }
    function getPrice(){

    }
    function getMileage(){

    }
    function fourWheel(){

    }
}

