<?php

    function displayKey($key){
        echo "value='$key'";
    }


    function encodeData($originalData, $key){
//        print_r($key);    // genered key data
        $data = '';
        $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890";

        $length = strlen($originalData);

        for ($i = 0; $i < $length; $i++){

            $currentData = $originalData[$i];
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


    function decodeData($originalData, $key){

        $data = '';
        $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890";

        $length = strlen($originalData);

        for ($i = 0; $i < $length; $i++){

            $currentData = $originalData[$i];
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