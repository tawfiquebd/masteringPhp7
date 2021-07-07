<?php

// stored procedure out parameter value access by php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

mysqli_query($connection, "CALL get_mfc_cs(1, 'A', @tm, @tf);");
$result = mysqli_query($connection, "SELECT @tm as totalMale, @tf as totalFemale");

echo mysqli_num_rows($result);

while($data = mysqli_fetch_assoc($result)){
    print_r($data);
}