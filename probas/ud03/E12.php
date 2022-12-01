<?php
    for ($i = 0; $i < 3; $i++){
        for($j = 0; $j < 5; $j++){
            $array[$i][$j] = $i + $j;
        }
    }
    print_r($array);
?>