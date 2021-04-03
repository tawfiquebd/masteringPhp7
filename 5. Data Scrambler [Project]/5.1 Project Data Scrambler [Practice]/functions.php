<?php

    function displayKey($key){

        printf("value = %s", $key);
    }


    function encodeData($originalValue, $key){

        $data = '';
        $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890";

        $length = strlen($originalValue);

        for($i = 0; $i < $length; $i++){

            $currentData = $originalValue[$i];
            $pos = strpos($originalKey, $currentData);

            if($pos !== false){
                $data .= $key[$pos];
            }
            else{
                $data .= $currentData;
            }
        }
        return $data;
    }


    function decodeData($value, $key){

        $data = '';
        $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890";

        $length = strlen($value);

        for($i = 0; $i < $length; $i++){

            $currentData = $value[$i];
            $pos = strpos($key, $currentData);

            if($pos !== false){
                $data .= $originalKey[$pos];
            }
            else{
                $data .= $currentData;
            }
        }
        return $data;
    }