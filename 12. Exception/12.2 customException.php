<?php

// Custom Exception

class MyException extends Exception{}
class NetworkException extends Exception{}

function testException(){
    throw new NetworkException();   // NetworkException will evoke
}

try{
    testException();
}
catch (MyException $e){
    echo "MyException Caught\n";
}
catch (NetworkException $e){
    echo "NetworkException Caught\n";
}
catch (Exception $e){
    // if default exception founds in upper block, then it will get priority first
    // so try to keep this block after your custom exception
    echo "Default Exception Caught\n";
}
finally{
    echo "Finished cleanup\n";
}