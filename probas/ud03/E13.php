<?php
    $m = 0;
    for ($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            if ($j == $m){
                $array[$i][$j] = 1;
            } else {
                $array[$i][$j] = 0;
            }
        }
        $m++;
    }
   
    
    $m = 0;
    for ($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            if ($j == $m){
                $array[$i][$j] = rand(1,9);
            } else {
                $array[$i][$j] = 0;
            }
        }
        $m++;
    }
    
    $matriz = array(
        array(1,0),
        array(2,4),
        array(3,5),
    );
    
    foreach($matriz as $posfila => $fila){
        foreach($fila as $posCol => $valor) {
            $trasposta [$posCol][$posfila] = $valor;
        }
    }

    $matriz = array(
        array(1,2,3),
        array(2,5,0),
        array(3,0,5),
    );
    foreach($matriz as $posfila => $fila){
        foreach($fila as $posCol => $valor) {
            $trasposta [$posCol][$posfila] = $valor;
            
        }
    }



?>