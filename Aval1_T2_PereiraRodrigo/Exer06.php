<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Boletín</title>
		<link rel="stylesheet" href="Estilo.css"/>
	</head>
	<body>
		<header>
			<h1>Modulo IAW</h1>
		</header>
		<main>
			<div class="contenido">
				<h2>Enunciado</h2>
				<p>Ejercicios Boletín</p>
			</div type="contenido">
			<div class="contenido">
				<h2>Lista</h2>
                <?php
                
                    $a = 1184;
                    $b = 1200;
                    $sa = 0;
                    $sb = 0;

                    for ($i = 1; $i <= $a; $i++) {
                        if ($a % $i == 0) {
                            $sa = $sa + $i;
                        }
                    }
                    for ($i = 1; $i <= $b; $i++) {
                        if ($b % $i == 0) {
                            $sb = $sb + $i;
                        }
                    }
                    if ($sa == $sb) {
                        echo "<p>" . $sa . " y " . $sb . " son iguales, por lo tanto " . $a . " y " . $b . " son numeros amigos" . "</p>";
                    } else {
                        echo "<p>" . $sa . " y " . $sb . " no son iguales, por lo tanto " . $a . " y " . $b . " no son numeros amigos" . "</p>";
                    }

                ?>
            </div>
		</main>
		<footer>
			<div class="foot">
				<p><span id="Nombre">Rodrigo Pereira Gonzalez</span> <span id="Fecha">Fecha: 14/09/2022</span></p>
			</div>
		</footer>
	</body>
</html>