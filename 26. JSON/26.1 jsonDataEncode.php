<?php

$data = array(
    "firstname"=>"john",
    "lastname"=>"doe",
    "email"=>"john@doe.com"
);

echo json_encode($data, JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT for beautify
