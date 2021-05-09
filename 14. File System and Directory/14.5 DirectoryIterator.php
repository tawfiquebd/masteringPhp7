<?php

// DirectoryIterator class  // Its override Spl class
// Limitation : We can't use this as recursive iterator .

$dir = new DirectoryIterator("./"); // 1 dot is current path, 2 dot is parent path
foreach ($dir as $file){
    if($file->isDot()){
        continue;
    }
    if($file->isDir()){
        echo $file->getPathname()."\n";
    }
    else{
        echo $file->getPathname()." : ".$file->getSize()."\n";
    }

}