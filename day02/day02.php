<?php
    $route = explode("\n", file_get_contents('day02.txt'));

    $horizontal = 0;
    $depth = 0;
    $aim = 0;

    foreach ($route as &$value){
        $instruction = explode(' ', $value);
        if($instruction[0] == 'down'){
            $aim += $instruction[1];
        }
        if($instruction[0] == 'up'){
            $aim -= $instruction[1];
        }
        if($instruction[0] == 'forward'){
            $horizontal += $instruction[1];
            $depth += $aim *  $instruction[1];
        }
    }

    $result = $horizontal * $depth;
    echo $result;