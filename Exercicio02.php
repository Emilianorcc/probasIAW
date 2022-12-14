<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE==edge">
    <meta name="viewport" content="width==device-width, initial-scale==1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Primero con un if comprobamos si el valor $n es se ecuentra entre 1 y 12 y si es un número entero,
        luego en caso de ser correcto comprobamos la variable $f y si es distinta de 0 o 1 la igualamos a 0,
        y ahora dentro de un switch buscamos el valor de $n ahora en caso de ser 0 imprimimos por pantalla el mes y en caso de ser 1 los días*/
        function meses($n, $f = 0)
        {
            $err = -1;
            if ($n < 1 || $n > 12 || is_float($n)) {
                echo $err;
            } else {
                if ($f != 1 && $f != 0) {
                    $f = 0;
                }
                switch ($n){
                    case 1:
                        if ($f == 0) {
                            echo "Enero";
                        } else{
                            echo "31";
                        }
                        break;

                    case 2:
                        if ($f == 0) {
                            echo "Febrero";
                        } else{
                            echo "28";
                        }
                        break;
                    case 3:
                        if ($f == 0) {
                            echo "Marzo";
                        } else{
                            echo "31";
                        }
                        break;
                    case 4:
                        if ($f == 0) {
                            echo "Abril";
                        } else{
                            echo "30";
                        }
                        break;
                    case 5:
                        if ($f == 0) {
                            echo "Mayo";
                        } else{
                            echo "31";
                        }
                        break;
                    case 6:
                        if ($f == 0) {
                            echo "Junio";
                        } else{
                            echo "30";
                        }
                        break;
                    case 7:
                        if ($f == 0) {
                            echo "Julio";
                        } else{
                            echo "31";
                        }
                        break;
                    case 8:
                        if ($f == 0) {
                            echo "Agosto";
                        } else{
                            echo "31";
                        }
                        break;
                    case 9:
                        if ($f == 0) {
                            echo "Septiembre";
                        } else{
                            echo "30";
                        }
                        break;
                    case 10:
                        if ($f == 0) {
                            echo "Octubre";
                        } else{
                            echo "31";
                        }
                        break;
                    case 11:
                        if ($f == 0) {
                            echo "Noviembre";
                        } else{
                            echo "30";
                        }
                        break;
                    case 12:
                        if ($f == 0) {
                            echo "Diciembre";
                        } else{
                            echo "31";
                        }
                        break;
                }
            }
        }
        meses("a" , 1);
        echo "<br/>";
        meses(2 , 0);
        echo "<br/>";
        meses(3);
        echo "<br/>";
        meses(4, 4);
    ?>
</body>
</html>