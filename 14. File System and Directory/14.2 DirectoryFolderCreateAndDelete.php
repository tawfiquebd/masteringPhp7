<?php

//mkdir("test");  // create a directory/folder

//mkdir("test/d1/d2/d3", 0777, true); // recursively create directory

//mkdir("testfolder");
//sleep(4);   // wait 3 seconds
//rmdir("testfolder");    // remove directory testfolder

// to delete directory with files, then you have to remove the file first, then remove directory
//mkdir("newtestfolder");
//file_put_contents("newtestfolder/file.txt","Hello"); // creating a file inside dir
//sleep(5);   // wait/hold 5 seconds
//unlink("newtestfolder/file.txt");   // to remove any folder
//rmdir("newtestdir");    // remove the directory

// making a directory file delete function
deletedir(getcwd().DIRECTORY_SEPARATOR."newtestfolder");

function deletedir($path){

    $filesInPath = scandir($path);
    if(count(scandir($path)) > 2){
        foreach ($filesInPath as $file){
            if("." != $file && ".." != $file){
                $filepath = $path.DIRECTORY_SEPARATOR.$file;
                unlink($filepath);  // remove the file
            }
        }
    }
    rmdir($path);   // remove the directory
}