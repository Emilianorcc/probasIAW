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
                    
                    $d = 29;
                    $m = 2;
                    $a = 2001;
                    

                        
                    switch ($m){
                        case 1:
                            if ($d <= 0 || $d >= 32) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 2:
                            if ($a % 4 == 0 && ($a % 100 != 0 || $a % 400 == 0)) {
                                if ($d <= 0 || $d >= 30) {
                                    echo "<p>fecha incorrecta</p>";
                                } else {
                                    echo "<p>fecha correcta</p>";
                                }
                            } else {
                                if ($d <= 0 || $d >= 29) {
                                    echo "<p>fecha incorrecta</p>";
                                } else {
                                    echo "<p>fecha correcta</p>";
                                }
                            }
                            break;
                        case 3:
                            if ($d <= 0 || $d >= 32) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 4:
                            if ($d <= 0 || $d >= 31) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 5:
                            if ($d <= 0 || $d >= 32) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 6:
                            if ($d <= 0 || $d >= 31) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 7:
                            if ($d <= 0 || $d >= 32) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 8:
                            if ($d <= 0 || $d >= 32) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 9:
                            if ($d <= 0 || $d >= 31) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 10:
                            if ($d <= 0 || $d >= 32) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 11:
                            if ($d <= 0 || $d >= 31) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
                            }
                            break;
                        case 12:
                            if ($d <= 0 || $d >= 32) {
                                echo "<p>fecha incorrecta</p>";
                            } else {
                                echo "<p>fecha correcta</p>";
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