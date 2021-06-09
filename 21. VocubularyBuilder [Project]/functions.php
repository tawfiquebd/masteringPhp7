<?php
include_once 'config.php';

// Database connection
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection){
    throw new Exception("Failed to connect database");
}


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

function getWords($user_id, $search = null){
    global $connection;
    if($search){    // search word by first character. so use $search% . For mix char use '%search%'
        $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '{$search}%' ORDER BY word ";
    }
    else{
        $query = "SELECT * FROM words WHERE user_id = '{$user_id}' ORDER BY word ";
    }
    $result = mysqli_query($connection, $query);
    $data = [];
    while($_data = mysqli_fetch_assoc($result)) {
        array_push($data, $_data);
    }
    return $data;
}
