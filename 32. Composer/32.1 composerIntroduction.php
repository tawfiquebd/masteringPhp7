<?php

// composer . composer is a php dependency manager
// make a directory/folder. => command in cmd/terminal : mkdir directory/folder name

/*
* To install a Package
 * --------------------
 * Make a directory/folder first in your project root dir
 * then go to packagist.org  to get the package name . Ex: ramsey/uuid
 * then goto that directory where you want to install the package
 * And now in the terminal type : composer require ramsey/uuid
*/

// To install a package with selected/older version
/**
 * composer require packageName:version
 * Ex: composer require paragonie/sodium_compat:1.15.0
 */


// To update a installed package
/**
 * Go to package directory folder and open composer.json file
 * Change the version FROM "paragonie/sodium_compat": "1.15.1"  TO => "paragonie/sodium_compat": "1.16.1"
 * Then open terminal and type : composer update
 * It will update the package......
 */

// To remove a package from project
/**
 * Go to that project folder and open terminal
 * type => composer remove packageName
 * Ex: composer remove paragonie/sodium_compat
 */