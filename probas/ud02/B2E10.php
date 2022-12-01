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
        $c="X";
        $p="P";
        $n=100;
        if ($c == "X") {
            $d=$n*0.15;
            $r=$n*0.1;
            if ($p == "C"){
                echo $d . " de desconto";
            } else {
                echo $r . " de recargo";
            }
        } else {
            $d=$n*0.2;
            $r=$n*0.05;
            if ($p == "C"){
                echo $d . " de desconto";
            } else {
                echo $r . " de recargo";
            }
        }

    ?>
</body>
</html>