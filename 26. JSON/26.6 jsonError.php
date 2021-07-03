<?php

/*
$json = '{
    "country":"বাংলাদেশ"
}';
*/

// If we want to use json data as in single quote it will give us syntax error.

$json = "{
    \"country\":\"বাংলাদেশ\"
}";
print_r(json_decode($json, true));

echo json_last_error_msg(); // to get log about last json error