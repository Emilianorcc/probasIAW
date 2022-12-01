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
        $vocales = array('a','e','i','o','u');
        $c="b";
        if (in_array($c, $vocales)){
            echo $c . " es una vocal";
        } else {
            echo $c . " es una consonante";
        }
    ?>
</body>
</html>