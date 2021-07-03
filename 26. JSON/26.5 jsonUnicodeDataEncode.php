<?php

// json unicode data encode

$data = array(
    "country"=>"বাংলাদেশ"
);

// if we want to show json data as actual unicode format then pass a parameter here
// JSON_UNESCAPED_UNICODE -> to show original unicode data
$unicodeEncodedJSON = json_encode($data, JSON_UNESCAPED_UNICODE);
echo $unicodeEncodedJSON;