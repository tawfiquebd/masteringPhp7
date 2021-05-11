<?php

// glob() function

//print_r(glob("./*"));   // get all files and folders in this current directory
//print_r(glob("./*",GLOB_ONLYDIR));   // get all directories/folders only
//print_r(glob("./*n*",GLOB_ONLYDIR));   // get all folders which names start with n
//print_r(glob("./*e*",GLOB_ONLYDIR));   // get all folders which names has e
//print_r(glob("./{n,a}*",GLOB_ONLYDIR|GLOB_BRACE));// get folders which names has n and a
//print_r(glob("./newpath/*/*.txt"));// get all .txt files files under ./newpath/
print_r(glob("./newpath/*/*[!.txt]"));// get all files under ./newpath folder except .txt file
