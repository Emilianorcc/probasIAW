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
        $cociente= 355;
        $ni = 0;
        $dig = 0;
        

        while ($cociente != 0){
            $dig = $cociente % 10;
            $cociente =  floor($cociente/10);
            $ni = ($ni * 10) + $dig;
        }
        echo "\t<ul>\n" . 
                "\t\t\t<li>$ni</li>\n" . 
            "\t\t</ul>\n";
    ?>
</body>
</html>