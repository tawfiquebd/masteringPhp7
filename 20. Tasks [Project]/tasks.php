<?php
include_once 'config.php';
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection){
    throw new Exception("Failed to connect database");
}
else {
//$action = isset($_POST['action']) ? $_POST['action'] : '';
    $action = $_POST['action'] ?? '';

    if (!$action) {
        header("Location:index.php");
        die();
    } else {
        // process here
        if ('add' == $action) {
            $task = $_POST['task'];
            $date = $_POST['date'];

            if ($task && $date) {
                $query = "INSERT INTO " . DB_TABLE . "(task, date) VALUES('{$task}', '{$date}')";
                mysqli_query($connection, $query);
                header("Location: index.php?added=true");
            }
            else{
                header("Location: index.php");
            }
        }
    }
}
