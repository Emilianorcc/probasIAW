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
                    if ($horas = 24) {
                        $horas = 0;
                    }

                    echo "<p>" . sprintf("%02d", $horas) . ":" . sprintf("%02d", $minutos) . ":" . sprintf("%02d", $segundos) . "</p>";
                
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