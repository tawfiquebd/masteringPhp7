<?php

// Solid - Open/Closed Principle

/* Open = Open for extension
   Close = Close for modification
   - When a A class has been finished written, then it shouldn't modify in that class
    for feature development. That is called close for modification. If need to improve then
    the class should be open for extension so that, anyone can extend that class for future code.
*/

// If we want to extend this code in future, we will face problem, Its a bad design example.
// We can't modify here for future code improvement, It breaks of solid - Open/Close principle.
/*class FileDisplay{
    function display($file, $fileType){
        if("mp4" == $fileType){
            //display video player
        }
        else if("mp3" == $fileType){
            // display audio player
        }
        else{
            // display text file
        }
    }
}*/

// For maintain Open/Close principle

// Interface
interface FileInterface{
    function display();
}

// Main class
class FileDisplay{
    // display method will receive interface class type object
    function display(FileInterface $file){
        $file->display();
    }
}

// Adding feature. Image file system. Implementing interface class
class ImageFile implements FileInterface{
    function display(){
        // take necessary steps to display image file
    }
}

// Adding feature. Video file system. Implementing interface class
class VideoFile implements FileInterface{
    function display(){
        // take necessary steps to display video file
    }
}

// Adding feature. Audio file system. Implementing interface class
class AudioFile implements FileInterface{
    function display(){
        // take necessary steps to display audio file
    }
}

$image = new ImageFile("abcd.jpg"); // instantiate object.
$video = new VideoFile("abcd.mp4");
$audio = new AudioFile("abcd.mp3");

$fd = new FileDisplay();    // Main class
$fd->display($image);   // passing object into main class method display()
$fd->display($video);
$fd->display($audio);

