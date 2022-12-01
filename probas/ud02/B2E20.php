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
        $n=3;
        $rangoI = 50;
        $rangoS = 100;
        $cont=0;
        for (; $rangoI <= $rangoS; $rangoI++) {
            if ($rangoI % $n == 0) {
                $cont++;
            } 
        }
        echo "multiplos: $cont" . "</br>";
        
    ?>
</body>
</html>