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
                
                    $n = 6;
                    $sum = 0;

                    for ($i = 1; $i != $n; $i++) {
                        if ($n % $i == 0) {
                            $sum = $sum + $i;
                        }
                    }
                    if ($sum == $n) {
                        echo "<p>" . $n . " es perfecto</p>";
                    } else {
                        echo "<p>" . $n . " no es perfecto</p>";
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