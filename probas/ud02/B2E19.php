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
        $n = 10;
        $p = 0;
        $im = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 == 0) {
                $p++;
            } else {
                $im++;
            }
        }
    ?>
    <ul>
        <li>suma impares: <?php echo $im ?></li>
        <li>suma pares: <?= $p ?> </li>
    </ul>
</body>
</html>