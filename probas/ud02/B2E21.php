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
        $n=29;
        $cont=0;
        for ($i=1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $cont++;
            }
        }
        if($cont <= 2) {
            echo "$n es un número primo" . "</br>";
        } else {
            echo "$n no es un número primo" . "</br>";
        }

        /*------------------------------------------------*/
        $n = 7;
        $primo = true;
        $cont = 2;
        do {
            if ($n % $cont == 0) {
                $primo = false;
            }
            $cont++;
        } while ($primo && $cont < $n);
            if($primo) {
                echo "$n es un número primo" . "</br>";
            } else {
                echo "$n no es un número primo" . "</br>";
            }
    ?>
</body>
</html>