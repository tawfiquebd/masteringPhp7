<?php
// mysqli multiple query run in database and solve a interesting problem

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$queries = [];
for($class = 1; $class <= 10; $class++){
    foreach(['A', 'B', 'C', 'D'] as $section){
        $queries[] = "SET @roll = 0; UPDATE students SET roll = @roll:= @roll+1 WHERE class = {$class} AND section = '{$section}';";

    }
}

$result = mysqli_multi_query($connection, join('',$queries));   // for multiple query run
if(mysqli_error($connection)){
    echo mysqli_error($connection);
}