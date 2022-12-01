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
        $c="A";
        $p="C";
        $n=100;
        $cond=$c.$p;

        switch ($cond){
            case "XC":
                $op=$n*0.15;
                echo $op . " de desconto";
                break;
            case "XP":
                $op=$n*0.1;
                echo $op . " de recargo";
            case "AC":
                $op=$n*0.2;
                echo $op . " de desconto";
                break;
            case "AP":
                $op=$n*0.05;
                echo $op . " de recargo";
        }
    ?>
</body>
</html>