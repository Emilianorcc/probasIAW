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
                
                    $m = 6;
                    $d = 21;
                    
                    switch ($m) {
                        case 1:
                        case 2:
                            echo  "<p>Inverno</p>";
                            break;
                        case 3:
                            if ($d >= 21) {
                                echo "<p>Primavera</p>";
                            } else {
                                echo "<p>Inverno</p>";
                            }
                            break;
                        case 4:
                        case 5:
                            echo "<p>Primavera</p>";
                            break;
                        case 6:
                            if ($d >= 22) {
                                echo "<p>Verán</p>";
                            } else {
                                echo "<p>Primavera</p>";
                            }
                            break;
                        case 7:
                        case 8:
                            echo "<p>Verán</p>";
                            break;
                        case 9:
                            if ($d >= 23) {
                                echo "<p>Outono</p>";
                            } else {
                                echo "<p>Verán</p>";
                            }
                            break;
                        case 10:
                        case 11:
                            echo "<p>Outono</p>";
                            break;
                        case 12:
                            if ($d >= 21) {
                                echo "<p>Inverno</p>";
                            } else {
                                echo "<p>Outono</p>";
                            }
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