<?php

    $peso = 300;
    $altura = 6.5;
    const ft_cm = 30.48;
    const lbs_kg = 0.453592;
    $convft = ft_cm*$altura;
    $convlbs = lbs_kg*$peso;
    echo "$convft cm " . "$convlbs kg " . ($convlbs/pow(($convft/100),2));
?>