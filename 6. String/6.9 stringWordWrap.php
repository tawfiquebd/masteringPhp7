<?php

   /* The wordwrap() function wraps a string into new lines when it reaches a specific length.

Note: This function may leave white spaces at the beginning of a line.

wordwrap(string,width,break,cut) */ // break, cut is optional

    $strings = "Hello, My name is Md Tawfique Hossain. I am from Bangladesh";

//    echo wordwrap($strings, 20);    // after 20 character
    echo wordwrap($strings, 30,"\n",true);    // after 30 character
    echo "<br/>";

    // for web browser use <br/>  to break/newline
    echo wordwrap($strings, 30,"<br/>",true);    // after 30 character