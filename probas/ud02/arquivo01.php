<?php

    $a=rand(1, 10); 
    echo $a;
    if (($a % 2) == 0) {
        echo "<p>Tocouche un número par</p>\n";
    } else {
        echo "<p>Tocouche un número impar</p>\n";
    }

    echo (($a % 2) == 0) ?  "Tocouche un número par " : "Tocouche un número impar";
?>