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

        $horas = 23;
        $minutos = 59;
        $segundos = 59;

        $segundos++;
        if ($segundos == 60) {
            $minutos++;
            $segundos = 0;
        }
        if ($minutos == 60) {
            $horas++;
            $minutos = 0;
        }
        if ($horas == 24) {
            $horas = 0;
        }

        echo sprintf("%02d", $horas) . ":" . sprintf("%02d", $minutos) . ":" . sprintf("%02d", $segundos);

    ?>
</body>
</html>