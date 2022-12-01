<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Aval1-T1: Creación plantilla HTML/CSS para exercicios</title>
		<link rel="stylesheet" href="Estilo.css"/>
	</head>
	<body>
		<header>
			<h1>Modulo IAW</h1>
		</header>
		<main>
			<div class="contenido">
				<h2>Enunciado</h2>
				<p>Dice Roll</p>
			</div type="contenido">
			<div class="contenido">
				<h2>Resultado</h2>
				<p>
                    <?php


                        function roll($number, $sides, $values = false)
                        {
                            $dice = array();
                            for ($i = 0; $i < $number; $i++)
                            {
                                $dice[] = rand (1, $sides);
                            }
                            
                                if ($values) 
                                {
                                    return $dice;
                                }
                                else
                                {
                                    return array_sum($dice);
                                }
                            
                        }

                        $roll_3d6 = roll(3, 6);
                        echo "<pre>Dice roll = {$roll_3d6}\n";
                    ?>
                </p>
                
			</div>
		</main>
		<footer>
			<div class="foot">
				<p><span id="Nombre">Rodrigo Pereira Gonzalez</span> <span id="Fecha">Fecha: 14/09/2022</span></p>
			</div>
		</footer>
	</body>
</html>