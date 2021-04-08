<?php
// php date function

echo date('d-m-y'); //  08-04-21
echo "\n";
echo date('d/m/y'); //  08/04/21
echo "\n";
echo date('d/M/Y'); //  08/Apr/2021
echo "\n";
echo date('D/M/Y'); //  Thu/Apr/2021
echo "\n";
echo date('dS/M/Y'); //  08th/Apr/2021  // here S means suffix of day th/st
echo "\n";
echo date('dS/F/Y'); //  08th/April/2021
echo "\n";
echo date('dS/F/Y'); //  08th/April/2021
echo "\n";
echo date('dS/F/Y h:i:s'); //  08th/April/2021 12:54:52 // php server GMT:6+ timezone // 12 hour format
echo "\n";
echo date('dS/F/Y H:i:s'); //  08th/April/2021 12:54:52 // 24 hour format
echo "\n";
echo date('dS/F/Y H:i:s a'); //  08th/April/2021 12:58:03 pm
echo "\n";
echo date('dS/F/Y H:i:s A'); //  08th/April/2021 12:58:03 PM
echo "\n";
echo date('z'); //  97 days running of the year 2021
echo "\n";

// If we want to set our local timezone and show the date time.

date_default_timezone_set('Asia/Dhaka'); // Asia/Dhaka timezone set
//date_default_timezone_set('Asia/Kolkata'); // Asia/Kolkata timezone set

echo date('dS F, Y h:i:s A');   // 08th April, 2021 07:04:27 PM // (Showing my local time)
echo "\n";

echo date('dS F, Y h:i:s a');   // 08th April, 2021 07:04:27 pm // (Showing my local time)
echo "\n";

echo date('t');   // current month is 30 days
echo "\n";

echo time();   // date epoch. Its showing seconds from 1 jan,1970, 00:00 to current timestamp
echo "\n";

// we can pass timestamps in date() . time()+24*60*60 = + 24 hour / + 1 day more
echo date('dS F, Y h:i:s A',time()+24*60*60);   // 09th April, 2021 07:18:45 PM
echo "\n";

echo date('dS F, Y h:i:s A',time()+12*60*60);   // 09th April, 2021 07:18:45 AM
echo "\n";
