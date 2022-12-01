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

        $mes = 6;
        $dia = 21;

        switch ($mes) {
            case 1: 
            case 2:
                echo "Inverno";
                break;
            case 3:
                if ($dia >= 21) {
                    echo "Primavera";
                } else {
                    echo "Inverno";
                }
                break;
            case 4:
            case 5:
                echo "Primavera";
                break;
            case 6:
                if ($dia >= 22) {
                    echo "Verano";
                } else {
                    echo "Primavera";
                }
                break;
            case 7:
            case 8;
                echo "Verano";
                break;
            case 9:
                if ($dia >= 23) {
                    echo "Outono";
                } else {
                    echo "Verano";
                }
                break;
            case 10;
            case 11:
                echo "Outono";
                break;
            case 12:
                if ($dia >= 21) {
                    echo "Inverno";
                } else {
                    echo "Outono";
                }
                break;
        }
    ?>
</body>
</html>