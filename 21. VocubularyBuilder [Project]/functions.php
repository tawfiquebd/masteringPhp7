<?php

function getStatusMessage($status = 0){
    $statusCode =[
        '0'=>'',
        '1'=>"Duplicate email address",
        '2'=>"Username or Password empty",
        '3'=>"User created successfully",
        '4'=>"Username & Password didn't matched",
        '5'=>"Username doesn't exist"
    ];
    return $statusCode[$status];
}
