<?php
    $var = 4.654;
    $varint = (int)$var;
    echo "A parte enteira do valor $var é " . round($var,0) . '<br/>';
    echo "A parte enteira do valor $var é " . intval($var) . '<br/>';
    echo "A parte enteira do valor $var é " . $varint . '<br/>';
?>