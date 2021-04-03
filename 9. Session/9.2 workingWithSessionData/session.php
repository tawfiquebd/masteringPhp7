<?php

//    cd php7MasteringCourse/9. Session/ 9.2 workingWithSessionData

    // A session is a way to store information (in variables) to be used across
    //multiple pages. Unlike a cookie, the information is not stored on the users computer.

    session_name('myapp');

// starting session /
/// we can also pass here data . Passing array data
    session_start([
        'cookie_lifetime'=>60
    ]);

//    $_SESSION['name'] = 'Tawfique';
//    $_SESSION['age'] = 24;

    echo $_SESSION['name'];
    echo "<br/>";
    echo $_SESSION['age'];
    echo "<br/>";

    // counter by session variable
//    $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
//    $_SESSION['counter']++;
    echo $_SESSION['counter'];

//    session_destroy();      // session destroy from server