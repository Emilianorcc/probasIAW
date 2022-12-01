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
                
                    $n = 12322;
                    $cociente = $n;
                    $inv = 0;
                    $dixito = 0;

                    while ($cociente != 0) {

                        $dixito = $cociente % 10;
                        $cociente = floor($cociente / 10);
                        $inv = ($inv * 10) + $dixito; 
                
                    }

                    if ($inv == $n) {
                        echo "<p>es capicua</p>";
                    } else {
                        echo "<p>no es capicua</p>";
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