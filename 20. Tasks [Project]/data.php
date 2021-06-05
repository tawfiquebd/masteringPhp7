<?php
include_once 'config.php';

// Database connection
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection){
    throw new Exception("Failed to connect database");
}
else{
    //echo "Database connected ";
    //insert record
//    echo mysqli_query($connection, "INSERT INTO tasks(task,date) VALUES('Do something 2', '2021-06-5')");
//    echo mysqli_query($connection, "INSERT INTO tasks VALUES(NULL,'Do something 3', '2021-06-5','')");

    // Get all records
    $result = mysqli_query($connection, "SELECT * FROM tasks"); // returns an object
//    print_r($result);
    /*
     * mysqli_fetch_array() - returns as like indexed and associative array
     * mysqli_fetch_assoc() - returns as like associative array
     * mysqli_fetch_row()   - returns as like indexed array
     * mysqli_fetch_object() - returns the current row of a result set as an object.
    */
    while($row = mysqli_fetch_assoc($result)){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }

    // Delete Records
//    echo mysqli_query($connection, "DELETE FROM tasks WHERE id > 3");

    // Update Records
//    echo mysqli_query($connection, "UPDATE tasks SET task = 'Learn PHP' WHERE id = 3 LIMIT 1");

    // Delete tables all data
//    echo mysqli_query($connection, "TRUNCATE TABLE tasks");

    // Good Practice is always close your database connection
    mysqli_close($connection);

}