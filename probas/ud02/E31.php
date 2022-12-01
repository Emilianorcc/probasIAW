<?php
    define ("IVA", "21");
    define ("PI","3.141516");

    function suma($operando1, $operando2) 
    {
        $total = $operando1 + $operando2;
        echo "<p>Suma de $operando1 + $operando2 = $total</p>\n";
    }

    function PrezoFinal($Vventa)
    {
        $IVA = 0.21;
        $IVAv = $Vventa * $IVA;
        $Pventa = $IVAv + $Vventa;
        return $Pventa;
    }

    function cociente(int $v1, int $v2) 
    {
        $resultado[0] = $v1 % $v2;
        $resultado[1] = $v1 / $v2;
        return $resultado;
    }
    
    function transformarHora(int $horas): array 
    {
        $rdo[] = $horas * 60;
        $rdo[] = $horas * 60 * 60;
        return $rdo;
    }

    function area($radio, $altura): float 
    {
        return (2*PI*$radio*($radio+$altura));
    }
    
    function volume($radio, $altura) 
    {
        return (PI * $radio ** 2 * $altura);
    }
?>