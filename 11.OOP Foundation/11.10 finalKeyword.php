<?php
// Final keyword
// Final keyword method dont allow to override in child class .
abstract class Ourclass{

    final function doSomething(){
        echo "Doing something\n";
    }
}

class Myclass extends Ourclass{

//    function doSomething(){           // can't override here
//        echo "Doing something\n";
//    }
}

$myClassObj = new Myclass();
$myClassObj->doSomething();