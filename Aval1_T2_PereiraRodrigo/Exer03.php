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
                
                    $p = 2;
                    $c = 2;
                    $precio = 0;

                    switch ($p) {
                        case 1: 
                            switch ($c) {
                                case 1:
                                    $precio = 5000;
                                    break;
                                case 2:
                                    $precio = 4500;
                                    break;
                                case 3:
                                    $precio = 4000;
                                    break;
                            }
                        case 2: 
                            switch ($c) {
                                case 1:
                                    $precio = 4500;
                                    break;
                                case 2:
                                    $precio = 4000;
                                    break;
                                case 3:
                                    $precio = 3500;
                                    break;
                            }
                        case 3: 
                            switch ($c) {
                                case 1:
                                    $precio = 4000;
                                    break;
                                case 2:
                                    $precio = 3500;
                                    break;
                                case 3:
                                    $precio = 3000;
                                    break;
                            }
                    }

                    echo "<p>Este es el precio final del producto " . $precio . "</p>"

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