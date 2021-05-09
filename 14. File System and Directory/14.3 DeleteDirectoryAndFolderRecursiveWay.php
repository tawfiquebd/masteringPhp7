<?php

//mkdir("test/d1/d2/d3",0777,true);   // 0777 is folder permission
//
//file_put_contents("test/test.txt","hello");
//file_put_contents("test/d1/test.txt","hello");
//file_put_contents("test/d1/d2/test.txt","hello");
//file_put_contents("test/d1/d2/d3/test.txt","hello");

sleep(10);

// making a directory file delete function RECURSIVELY .
// to delete a directory, atfirst we have to delete the files inside the directory, then delete the directory
deletedir(getcwd().DIRECTORY_SEPARATOR."test");

function deletedir($path){
    if(!is_readable($path)){
        return;
    }
    $filesInPath = scandir($path);
    if(count(scandir($path)) > 2){
        foreach ($filesInPath as $file){
            if("." != $file && ".." != $file){
                $filepath = $path.DIRECTORY_SEPARATOR.$file;
                if(is_dir($filepath)){
                    deletedir($filepath);
                }
                else{
                    unlink($filepath);  // remove the file
                }
            }
        }
    }
    rmdir($path);   // remove the directory
}
