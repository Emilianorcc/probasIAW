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
        $n=90;
        if ($n > 100){
            $d=$n*0.2;
            $i=($n-$d)*0.19;
            $t=($n-$d)+$i;
            echo $d . " deconto" . "</br>";
            echo $i . " imposto" . "</br>";
            echo $t . " total" . "</br>";
        } else {
            $d=$n*0.1;
            $i=($n-$d)*0.19;
            $t=($n-$d)+$i;
            echo $d . " deconto" . "</br>";
            echo $i . " imposto" . "</br>";
            echo $t . " total" . "</br>";
        }
    ?>
</body>
</html>