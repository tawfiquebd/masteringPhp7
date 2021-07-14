<?php

require "vendor/autoload.php";  // to get all class files

use Ramsey\Uuid\Uuid;

// for more info go to official doc of Ramsey/uuid => https://uuid.ramsey.dev/en/latest/quickstart.html

echo Uuid::fromDateTime(new DateTime());    // generating an unique id based on time

// 48ab052a-e4c9-11eb-ba3b-b06ebf06422a
// 4e2934d6-e4c9-11eb-8d4c-b06ebf06422a