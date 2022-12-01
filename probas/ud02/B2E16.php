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
        $cociente= 1113335555555555777999;
        $ndig = 0;
        $pdig=0;
        $maior = 0;

        while ($cociente != 0){
            $dig = $cociente % 10;
            $cociente =  floor($cociente/10);
            $ndig++;
            if ($dig%2==0){
                $pdig++;
            }
            if ($maior<$dig) {
                $maior = $dig;
            }
        }
        echo "\t<ul>\n" . 
                "\t\t\t<li>$pdig</li>\n" . 
                "\t\t\t<li>$ndig</li>\n" . 
                "\t\t\t<li>$maior</li>\n" . 
            "\t\t</ul>\n";
    ?>
</body>
</html>