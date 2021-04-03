<?php

//    multiple checkbox options with two parameter pass, 1. inputname 2. value

    function isChecked($inputName, $value){
        if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName])){
            echo "checked";
        }
    }

//    multiple checkbox options with one parameter pass, 1. value

    function isFruitChecked($value){
        if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'] ) ){
            echo "checked";
        }
    }