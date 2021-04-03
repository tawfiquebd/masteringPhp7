<?php

    // Good Practice is split a large function to small function
    // Its easy to maintain and debug codes

    function doTaskA(){
        echo "This is task A\n";
    }

    function doTaskB(){
        echo "This is task B\n";
    }

    function doTaskC(){
        echo "This is task C\n";
    }

    function doTaskD(){
        echo "This is task D\n";
    }

    function doLargeTask(){

        doTaskA();
        doTaskB();
        doTaskC();
        doTaskD();

    }

    doLargeTask();