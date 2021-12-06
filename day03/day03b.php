<?php
    // Needs a refactor!!

    $diagnostics = explode("\n", file_get_contents('day03.txt'));


    $oxygen = $diagnostics;
    for ($r = 0; $r <= 11; $r++){
        $ones = 0;
        $zeroes = 0;

        foreach ($oxygen as $key => $value){
            if (substr($value, $r, 1) == 1) {
                $ones += 1;
            } else {
                $zeroes += 1;
            }
        }

        if(count($oxygen) > 1){

            if ($zeroes < $ones || $zeroes == $ones){
                foreach ($oxygen as $key => $value){
                    if (substr($value, $r, 1) == 0) {
                        unset($oxygen[$key]);
                    }
                }
            } else {
                foreach ($oxygen as $key => $value){
                    if (substr($value, $r, 1) == 1) {
                        unset($oxygen[$key]);
                    }
                }
            }
        }
    }


    $co2 = $diagnostics;
    for ($r = 0; $r <= 11; $r++){
        $ones = 0;
        $zeroes = 0;

        foreach ($co2 as $key => $value){
            if (substr($value, $r, 1) == 1) {
                $ones += 1;
            } else {
                $zeroes += 1;
            }
        }

        if(count($co2) > 1){

            if ($zeroes < $ones || $zeroes == $ones){
                foreach ($co2 as $key => $value){
                    if (substr($value, $r, 1) == 1) {
                        unset($co2[$key]);
                    }
                }
            } else {
                foreach ($co2 as $key => $value){
                    if (substr($value, $r, 1) == 0) {
                        unset($co2[$key]);
                    }
                }
            }
        }
    }


    $oxygen = array_values($oxygen);
    $co2 = array_values($co2);
    $result = bindec($oxygen[0]) * bindec($co2[0]);
    echo $result;