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
                $top = 0;

                for ($i = 1; $i <= 3; $i++) {
                    $d = rand(1, 6);
                    if ($d == 6) {
                        $top++;
                    }
                    
                }
                switch ($top) {
                    case 0:
                        echo "<p>Perdiste</p>";
                        break;
                    case 1:
                        echo "<p>Bronce</p>";
                        break;
                    case 2:
                        echo "<p>Plata</p>";
                        break;
                    case 3:
                        echo "<p>Oro</p>";
                        break;
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