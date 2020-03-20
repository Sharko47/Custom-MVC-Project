<?php
    function extractArrayElements($task_1_arr)
    {
        $elements = $task_1_arr[0];
        $elements =  trim($elements," ");
        $newarr = explode(" ",$elements);
        return $newarr;
    }
    function countArrayElements($arr)
    {
        $count = 0;
        foreach ($arr as $a) {
            if (isset($a)) {
                $count++;
            } else {
                break;
            }
        }
        return $count;
    }

    function countCharacter($string)
    {
        $count = 0;
        while ($string!= '') {
            $string = substr($string, 1);
            $count++;
        }
        return $count;
    }

    function hideStarting12Digits($cardNumber){
            
        $cardNumber = substr($cardNumber,14);
        $x = "XXXX XXXX XXXX";
        return $x.$cardNumber;
    }
