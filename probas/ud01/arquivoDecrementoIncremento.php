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
        $var = 5;
        $num1 = 10;
        $rdo = $num1 + ++$var;

        echo "<p>"."$rdo"."</p>";
        echo "<p>"."$var"."</p>";
    ?>
</body>
</html>