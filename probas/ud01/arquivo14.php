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
				<p>Uso de empty</p>
			</div type="contenido">
			<div class="contenido">
				<h2>Resultado</h2>
				<p>
                    <?php

                        $var = 0;
                        if (empty($var)) { 
                            echo "Variable non definida";
                        } else {
                            echo "Variable definida con valor $var";
                        }
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