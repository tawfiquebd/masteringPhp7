<?php

    function displayKey($generatedKey){

        printf("value=%s", $generatedKey);
    }


    function encodeData($originalData, $generatedKey){

        $data = '';
        $key = "abcdefghijklmnopqrstuvwxyz1234567890";
        $length = strlen($originalData);

        for($i = 0; $i < $length; $i++){

            $currentData = $originalData[$i];
            $pos = strpos($key, $currentData);

            if($pos !== false){

                $data .= $generatedKey[$pos];
            }
            else{
                $data .= $currentData;

            }
        }

        return $data;
    }


    function decodeData($originalData, $generatedkey){

        $data = '';
        $key = "abcdefghijklmnopqrstuvwxyz1234567890";
        $length = strlen($originalData);

        for($i = 0; $i < $length; $i++){

            $currentvalue = $originalData[$i];
            $pos = strpos($generatedkey, $currentvalue);

            if($pos !== false){
                $data .= $key[$pos];
            }
            else{
                $data .= $currentvalue;
            }
        }

        return $data;
    }