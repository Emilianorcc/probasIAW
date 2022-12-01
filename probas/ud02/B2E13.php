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
        
        $m=2;
        $a=2000;
        

        switch ($m){
            case 1:
                echo "Enero 31 días";
                break;
            case 2:
                if ($a%4==0&&($a%100!=0||$a%400==0)){
                    echo "Febrero 29 días";
                } else {
                    echo "Febrero 28 días";
                }
                break;
            case 3:
                echo "Marzo 31 días";
                break;
            case 4:
                echo "Abril 30 días";
                break;
            case 5:
                echo "Mayo 31 días";
                break;
            case 6:
                echo "Junio 30 días";
                break;
            case 7:
                echo "Julio 31 días";
                break;
            case 8:
                echo "Agosto 31 días";
                break;
            case 9:
                echo "Septiembre 30 días";
                break;
            case 10:
                echo "Octubre 31 días";
                break;
            case 11:
                echo "Noviembre 30 días";
                break;
            case 12:
                echo "Diciembre 31 días";
                break;
            }

    ?>
</body>
</html>