<?php

// json data to php object/array decode

$data = array(
    "firstname"=>"john",
    "lastname"=>"doe",
    "email"=>"john@doe.com"
);

$encodedJson = json_encode($data);
//echo $encodedJson;

// if we want get decoded data as an array, then pass true as parameter
// otherwise leave empty if we want get as an object . default value is false
$decodedData = json_decode($encodedJson, true);
print_r($decodedData);  // stdClass objects returned
echo $decodedData['firstname']."\n";    // treat as array


$decodedARRAYData = json_decode(json_encode(["key"=>"value"]), true);
print_r($decodedARRAYData);
echo $decodedARRAYData["key"];