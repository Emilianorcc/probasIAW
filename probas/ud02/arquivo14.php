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
        $rangoI = 30;
        $rangoS = 50;
        $cont = 0;

        for($i = $rangoI; $i <= $rangoS; $i++) {
            if ($i % 2 == 0) {
                $cont++;
            }
        }
        echo "Entre o numero $rangoI e o número $rangoS hai $cont pares.";

        $i = $rangoI;
        for( ; ; ) {
            if ($i <= $rangoS) {
                if ($i % 2 == 0) {
                    $cont++;
                }
                $i++;
            }else {
                break;
            }
        } 
        echo "Entre o numero $rangoI e o número $rangoS hai $cont pares.";
    ?>
</body>
</html>