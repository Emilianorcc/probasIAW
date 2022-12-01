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
        $t=40;
        if ($t < 10){
            echo "frío";
        } elseif (20 >= $t && $t > 10) {
            echo "nubrado";
        } elseif (30>=$t && $t>=21){
            echo "calor";
        } else {
            echo "tropical";
        }
    ?>
</body>
</html>