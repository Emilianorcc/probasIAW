<?php
    function encher1($value) 
    {
        for ($i = 0; $i < $value; $i++){
            $r = rand(1, 10);
            $a[$i] = $r;
        }
        return $a;
    }

    function conta1($array, $value) 
    {
        $count = 0;
        foreach ($array as $num){
            if ($num == $value){
                $count++;
            }
        }
        return $count;
    }
    
    function maiorPoboacion($array)
    {
        $maior = 0;
        $cidade = "";
        if (is_array($array) && !empty($array)) {
            foreach($array as $clave => $valor){
                if ($valor > $maior){
                    $maior = $valor;
                    $cidade = $clave;
                }
            }
        }
        return $cidade;
    }

    $va = [1, 2];
    $vb = [3, 4];

    if (is_array($va) && is_array($vb)){
        if (count($va) == count($vb)) {
            for ($i = 0; $i < count($va); $i++){
                $vs[$i] = $va[$i] + $vb[$i];
            }
        }
    }

    /*print_r($vs);*/

    function vectores($va, $vb)
    {    
        if (is_array($va) && is_array($vb)){
            if (count($va) == count($vb)) {
                for ($i = 0; $i < count($va); $i++){
                    $vs[$i] = $va[$i] + $vb[$i];
                }
            }
        }
        return $vs;
    }

    function notas($notas)
    {
        $suma = 0;
        $i = 0;
        if (empty($notas)){
            echo "Non hai notas dispoñibles";
        } else {
            echo "<table>";
            echo "<tr>
                    <td></td>
                    <td>Notas</td>
                </tr>";

            foreach($notas as $nota){
                $i++;
                $suma = $suma + $nota;
                echo "<tr>
                        <td>Nota $i</td>
                        <td>$nota</td>
                    </tr>";
            }
            $media = $suma / count($notas);
            echo "<tr>
                    <td>Total</td>
                    <td>" . round($media,2) . "</td>
                </tr>";
            echo "</table>";
        }
    }

    $n = [5, 4, 6, 8, 4, 3, 6, 7, 8, 4, 3, 5, 6];
    notas($n);


    /*$cidades = ["Coruña" => 15000, "Lugo" => 9000, "Ourense" => 10000, "Pontevedra" => 12000];

    $c = maiorPoboacion($cidades);

    echo $c;*/
    
    /*$array = encher1(35);
    $count = conta1($array, 5);

    
    $cont = 0;
    foreach ($array as $v) {
        echo "$v\n";
        $cont++;
        if ($cont == 10){
            echo "<br/>";
            $cont = 0;
        }
    }

    echo "<br/>" . "$count";*/


    

    
?>