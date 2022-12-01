<?php

    $a = 1;
    $b = 2;
    function suma()
    {
        //global $a,$b;

        $b = $GLOBALS['a'] + $GLOBALS['b'];
    }

    suma ();
    echo $b;
    echo "<br/>";
    suma ();
    echo $b;
?>