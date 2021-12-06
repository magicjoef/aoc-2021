<?php
    $diagnostics = explode("\n", file_get_contents('day03.txt'));
    $on = array_fill(0, 12, 0);
    $off = array_fill(0, 12, 0);

    foreach ($diagnostics as &$value){
        $binDigit = str_split($value);
        $i = 0;
        foreach ($binDigit as &$position){
            if($position == 0){
                $off[$i] += 1;
            }
            if($position == 1){
                $on[$i] += 1;
            }
            $i++;
        }
    }
    
    $gamma = "";
    $epsilon = "";
    for ($r = 0; $r <= 11; $r++){
        if ($off[$r] > $on[$r]){
            $gamma .= "0";
            $epsilon .= "1";
        } else {
            $gamma .= "1";
            $epsilon .= "0";
        }
    }

    $gamma = bindec($gamma);
    $epsilon = bindec($epsilon);

    $result = $gamma * $epsilon;
    echo $result;
