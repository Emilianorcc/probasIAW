<?php
    function suma($operando1, $operando2) {
        $total = $operando1 + $operando2;
        echo "<p>Suma de $operando1 + $operando2 = $total</p>\n";
    }
    function resta($operando1, $operando2) {
        $total = $operando1 - $operando2;
        echo "<p>resta de $operando1 - $operando2 = $total</p>\n";
    }
    function mult($operando1, $operando2) {
        $total = $operando1 * $operando2;
        echo "<p>multiplicación de $operando1 * $operando2 = $total</p>\n";
    }
    function div($operando1, $operando2) {
        $total = $operando1 / $operando2;
        echo "<p>división de $operando1 / $operando2 = $total</p>\n";
    }
    function operacionMates($operando1, $operando2, $operador = '*') {
        switch ($operador){
            case '+':
                $total = $operando1 + $operando2;
                break;
            case '-':
                $total = $operando1 - $operando2;
                break;
            case '*':
                $total = $operando1 * $operando2;
                break;
            case '/':
                $total = $operando1 / $operando2;
                break;
        }
        return $total;
            
    }
?>