<?php
    $m = 1;
    for ($i = 0; $i < 6; $i++){
        for($j = 0; $j < 4; $j++){
            
            $array[$i][$j] = 3 * $m;
            $m++;
        }
    }
    echo "<table>";
    foreach($array as $posfila => $fila){
        echo "<tr>";
        foreach($fila as $posCol => $valor) {
                echo"<td>$valor</td>";
                
        }
        echo "</tr>";
    }
    echo "</table>";

?>