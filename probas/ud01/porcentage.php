<?php

    $num1 = 44;
    $num2 = 2;

    $rdo = $num1 + $num2;
    $per1 = $num1/$rdo*100;
    $per2 = $num2/$rdo*100;
    $mod = $num1%$num2;
    $mult = $num1*$num2;



    echo "porcentaje = " . round($per1,0, PHP_ROUND_HALF_UP);

    echo "mod = $mod"."\n";
    echo "$mult";

?>