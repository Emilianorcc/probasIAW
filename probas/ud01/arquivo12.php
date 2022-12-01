<?php
    $a = 1; /*ambito global*/

    function test()
    {
        echo $a; /* referencia a una variable de ambito local */
    }

    test();
?>