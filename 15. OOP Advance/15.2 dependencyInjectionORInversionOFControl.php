<?php

// Dependency Injection/Inversion of control

interface BaseStudent{
    function displayName();
}

class ImprovedStudent implements BaseStudent {
    private $name;
    private $title;

    function __construct($name, $title){
        $this->name = $name;
        $this->title = $title;
    }

    function displayName(){
        echo "Hello from {$this->title} {$this->name} \n";
    }
}

class Student implements BaseStudent{

    private $name;

    function __construct($name){
        $this->name = $name;
    }

    function displayName(){
        echo "Hello from ". $this->name ."\n";
    }
}

// Tightly coupled
//class StudentManager{   // It Has strong dependency on Student class/object;
//    function introduceStudent($name){
//        $st = new Student($name);   // hard dependency
//        $st->displayName();
//    }
//}

// Loosely coupled  // Dependency injection // Reduced dependency
class StudentManager{
// we can also use type hint which class object will be received here
// Only BaseStudent interface implemented classes object accepted here
    function introduceStudent(BaseStudent $student){    // receiving object
        $student->displayName();    // object->method() calling
    }
}

//$stm = new StudentManager();
//$stm->introduceStudent("Rahim");

$st = new Student("Karim");
//$dt = new DateTime(); // date time object created
$sm = new StudentManager;
$ist = new ImprovedStudent("Karims","Mr."); // creating object of ImprovedClass
//$sm->introduceStudent($dt); // date time object will not be accepted here
//$sm->introduceStudent($st);
$sm->introduceStudent($ist); // passing object of ImprovedClass


