<?php
    $depths = explode("\n", file_get_contents('day01.txt'));
    $depthsCount = count($depths);

    $i = 0;
    $aggIncreases = 0;

    $aggSize = 1;

    foreach ($depths as &$value){

        if($i < ($depthsCount - $aggSize)){
            $aggValue = 0;
            for ($aggCounter = 0; $aggCounter < $aggSize; $aggCounter++){
                $aggValue += $depths[$i+$aggCounter];
            }
            if(isset($aggPrevious)){
                if($aggPrevious < $aggValue){
                    $aggIncreases++;
                }
            }
            $aggPrevious = $aggValue;
        }

        $i++;
    }

    echo $aggIncreases;