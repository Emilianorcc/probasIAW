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
        $n=100;
        $op = $n;
        $dig=0;
        $suma=0;
        while ($op > 0) {
            $dig =  $op % 10;
            $suma = $suma + pow($dig, 3);
            $op = floor($op / 10);
            
        }
        if ($n == $suma) {
            echo "$n es un cubo perfecto";
        } else {
            echo "$n no es un cubo perfecto";
        }
    ?>
</body>
</html>