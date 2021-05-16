<?php

// Single Responsibility Principle Another example.

// This Student class breaks Single Responsibility Principle . Because It performing multiple task.
class Student{
    function checkAttendance(){}
    function calculateGrade(){}
    function collectFee(){}
}

// Here are example of Single Responsibility Principle. Here we are performing three different
// tasks in three different classes. Which is following Solid - Single Responsibility Principle.
class GradeCalculator{

}

class Attendance {

}

class StudentPayments{

}
