<?php

// Convert string to unix timestamp (Date parsing) and difference
// of two dates with human readable

echo mktime(0,0,0,12,1,1980);
echo "\n";
// "12 december, 1980";
echo strtotime("1 december, 1980"); // string to timestamp convert/parse
echo "\n";

echo time();    // current timestamp
echo "\n";
echo strtotime("now"); // string to current timestamp convert
echo "\n";
echo strtotime("+3days"); // string to 3 days later timestamp convert
echo "\n";

//  (24*60*60) = means 86400 seconds or 3 days .
echo (strtotime("+3days")-strtotime("now"))/(24*60*60); // 3 days
echo "\n";
// 2weeks 7days means 3 week or 21 days.
echo (strtotime("+2weeks 7days")-strtotime("now"))/(24*60*60); // 21 days
echo "\n";
// 2weeks 7days 24 hours means 3 week 1 days or 22 days.
echo (strtotime("+2weeks 7days 24hours")-strtotime("now"))/(24*60*60); // 21 days
echo "\n";

echo strtotime('07 april, 2020');
echo "\n";
echo date('H:i:s A',strtotime('07 april, 2020'));
echo "\n";

// Php DateTime object

$d1 = new DateTime('05 January 2018');
$d2 = new DateTime('01 March 2019');
//$difference = date_diff($d1,$d2);
$difference = $d1->diff($d2);
echo $difference->format('%y Year %m Month %d Day');
echo "\n";
