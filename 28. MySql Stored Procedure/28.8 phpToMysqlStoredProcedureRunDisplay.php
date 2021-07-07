<?php

// php to mysql stored procedure run and display the result

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// stored procedure function call here
$result = mysqli_query($connection, "CALL get_students_by_class_and_section(5, 'A');");

echo mysqli_num_rows($result);

while($data = mysqli_fetch_assoc($result)){
    print_r($data);
}
