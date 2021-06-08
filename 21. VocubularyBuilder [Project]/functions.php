<?php

function getStatusMessage($status = 0){
    $statusCode =[
        '0'=>'',
        '1'=>"Duplicate email address",
        '2'=>"Username or Password empty",
        '3'=>"User created successfully"
    ];
    return $statusCode[$status];
}
