<?php

//  Displaying all select options and selected multiple options

    function getMultipleSelectOption($fruitsList, $getSelectedFruits){

        foreach($fruitsList as $fruit){
            $selected = '';
            $fruit = strtolower($fruit);
            if(in_array($fruit,$getSelectedFruits)){
                $selected = 'selected';
            }

            printf("<option %s value='%s' >%s</option> \n", $selected, $fruit, ucwords($fruit));

        }

    }