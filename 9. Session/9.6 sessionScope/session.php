<?php
//error_reporting(0);
/**
 * Main t1 er data t2-t1 e dekhate hole and t2-t1 er data main t1 e
 * dekhate hole , session name dite hobe dui jaygay and session_start() e parameter set
 * korte hobe. cookie_domain=> .st.com , t1 er aga dot use korte hobe and
 * cookie_path=> '/' root directory dite hobe, main t1 theke t2-t1 or
 * t2-t1 theke main t1 jekhane call korbo sekhane same vabe dite hobe.
 * */


session_name('ourapp');
session_start([
    'cookie_domain'=>'.st.com',
    'cookie_path'=>'/'
]);

$_SESSION['data']='Hello World 123';
echo $_SESSION['data'];

var_dump($_SESSION['data2']);
