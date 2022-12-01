<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function imprimirCabeceira() {
            echo "<h1>EMPRESA EMPRESA</h1>";
            echo "<h3>Estamos ao seu servizo desde 1930</h3>";
        }
        echo "<h1>Páxina principal</h1>";
        imprimirCabeceira();

        include "operacionfuncion.php";

        $op1 = 1;
        $op2 = 2;
        $operador = '+';

        suma($op1, $op2);
        resta($op1, $op2);
        mult($op1, $op2);
        div($op1, $op2);
        $total = operacionMates($op1, $op2, $operador);
        echo "<p>$op1 $operador $op2 = $total</p>\n";
        $total = operacionMates($op1, $op2, '-');
        $total = operacionMates($op1, $op2, '*');
        $total = operacionMates($op1, $op2, '/');
        /*echo "<p>$operando1 $operador $operando2 = $total</p>\n";*/
        $total = operacionMates($op1, $op2,);
        echo "<p>$op1 * $op2 = $total</p>\n";
    ?>
</body>
</html>