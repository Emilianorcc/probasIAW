<?php
    $notasPepito = ["eie" => 7, "aso" => 9, "sri" => 3, "eie" => 10, "eie" => 5, "eie" => 9];
    /*echo "<p>Pepito ten un $notasPepito[4] en IAW</p>\n";
    echo "<p>Pepito ten un $notasPepito[0] en EIE</p>\n";
    $average = array_sum($notasPepito)/count($notasPepito);
    echo "<p>media $average</p>\n";

    $count = 0;
    $suma = 0;
    for($i = 0; $notasPepito[$i] != false; $i++) {
        $count++;
    }
    echo "$count\n";
    for($a = 0; $a <= ($count - 1); $a++) {
        $suma = $notasPepito[$a] + $suma;
    }
    $media = $suma / $count;*/
    $suma = 0;
    $count = count($notasPepito);
    foreach($notasPepito as $valor) {
        $suma += $valor;
    }
    $media = $suma / $count;
    echo $media;
?>