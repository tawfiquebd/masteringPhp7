<?php

// to skip dot :  RecursiveDirectoryIterator::SKIP_DOTS
$size = 0;
//$rdi = new RecursiveDirectoryIterator("./",RecursiveDirectoryIterator::SKIP_DOTS);
$rdi = new RecursiveDirectoryIterator(getcwd(),RecursiveDirectoryIterator::SKIP_DOTS);  // getcwd() for full qualified path
$files = new RecursiveIteratorIterator($rdi);

foreach ($files as $file){
    if($file->isFile()){
        $size += $file->getSize();
    }
    if($file->getFileName() == "14.5 DirectoryIterator.php"){
        echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."\n";
    }
//    echo $file->getPath() .DIRECTORY_SEPARATOR. $file->getfileName()."\n";
}
echo "Directory file size: ".$size." bytes\n";