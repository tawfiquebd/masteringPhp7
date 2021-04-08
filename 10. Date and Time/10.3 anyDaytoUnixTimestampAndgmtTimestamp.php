<?php
// Make any Day to timestamp

echo time() ;   //  1617889781  seconds
echo "\n";
//mktime = make time
// From 1-1-1970 to dec 1 2020 12:00 AM     // server time
echo mktime(0,0,0,12,12,2020); //  1607731200 seconds
echo "\n";

date_default_timezone_set('Asia/Dhaka');    // set our local time zone

echo mktime(0,0,0,12,12,2020);  // 1607709600 seconds
echo "\n";

// 6    // 6 hour difference with our GMT+6 to local server time
echo (31200-9600)/(60*60);  // 60*60 = 3600 seconds. Or 24 hour
echo "\n";

//If we set our server time already in our local gmt time . But if we want to get
// GMT 6+ time , then we can do it by gmmktime()

echo gmmktime(0,0,0,12,12,2020);
echo "\n";

// From 13-09-1996  to  08-04-2021   =  8608 days
echo (mktime(0,0,0,9,13,1996) - mktime(0,0,0,4,8,2020)) /(24*60*60);
