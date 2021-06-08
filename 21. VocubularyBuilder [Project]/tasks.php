<?php
include_once 'config.php';

$action = $_POST['action'] ?? '';
$status = 0;
// Database connection
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection){
    throw new Exception("Failed to connect database");
}
else {
    if('register' == $action) {
        $username = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($username && $password) {
            $password = password_hash($password,PASSWORD_BCRYPT);
            $query = "INSERT INTO users(email,password) VALUES('{$username}','{$password}')";
            mysqli_query($connection, $query);

            if(mysqli_error($connection)){
                $status = 1;
            }
            else{
                $status = 3;
            }
        }
        else{
            $status = 2;
        }
        header("Location: index.php?status={$status}");
    }
}