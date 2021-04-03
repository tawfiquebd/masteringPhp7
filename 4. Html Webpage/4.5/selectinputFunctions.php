<?php

    // All select options displaying and selected one option
    function getAllSelectOptions($fruits, $selectedItem){

        foreach ($fruits as $fruit ){
            $fruit = strtolower($fruit);


            if($selectedItem == $fruit){
                printf("<option selected value='%s'>%s</option>\n", $fruit, ucwords($fruit));
            }
            else{
                printf("<option value='%s'>%s</option>\n", $fruit, ucwords($fruit));
            }


        }


    }