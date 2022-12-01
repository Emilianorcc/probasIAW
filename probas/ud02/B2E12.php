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
        
        $m=11;

        switch ($m){
            case ($m<1 || $m>12):
                echo "mes no valido";
                break;
            case 1:
            case 2:
            case 3:
                echo "1º trimestre";
                break;
            case 4:
            case 5:
            case 6:
                echo "2º trimestre";
                break;
            case 7:
            case 8:
            case 9:
                echo "3º trimestre";
                break;
            case 10:
            case 11:
            case 12:
                echo "4º trimestre";
                break;
        }

    ?>
</body>
</html>