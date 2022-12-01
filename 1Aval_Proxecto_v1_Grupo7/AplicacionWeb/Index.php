<html>
<head>
    <title>The Cultist Conclave</title>
    <link rel = "stylesheet" type = "text/css" href = "css/Slideshow.css">
    <link rel = "stylesheet" type = "text/css" href = "css/header.css">
    <link rel = "stylesheet" type = "text/css" href = "Fonts/stylesheet.css">
    <link rel = "stylesheet" type = "text/css" href = "css/Index.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css">
</head>
<body>
    <div id = "page-container">
        <div class = "header">
            <div class = "head1">
                <a class = "titulo" href = "Index.php"><img src = "img/Logo1.png"/></a>
                <p class = "lr"><a href = "login.php">Login</a> | <a href = "register.php">Register</a></p>
            </div>
            <div class = "head2">
                <ul class = "topnav-list">
                    <a href = "Reglas.php"><li>Reglas de Juego</li></a>
                    <a href = "Listahechizos.php"><li>Hechizos</li></a>
                    <a href = "Listamonstruos.php"><li>Monstruos</li></a>
                    <a href = "creapersonaje.php"><li>Crear personaje</li></a>
                    <a href = "admin.php"><li>Crear Partida</li></a>
                </ul>
            </div>
        </div>
        <div class = "container">
            <div class = "slider">
                    <input type = "radio" id = "1" name = "image-slide" hidden />
                    <input type = "radio" id = "2" name = "image-slide" hidden />
                    <input type = "radio" id = "3" name = "image-slide" hidden />
                    <input type = "radio" id = "4" name = "image-slide" hidden />
                <div class = "slideshow">
                        <div class = "item-slide">
                        <a href = "https://www.chaosium.com/cthulhu-quickstart/"><img src = "img/1.jpg" alt = "Slide 1" /></a>
                        </div>
                        <div class = "item-slide">
                        <a href = "Listamonstruos.php"><img src = "img/2.jpg" alt = "Slide 2" /></a>
                        </div>
                        <div class = "item-slide">
                        <a href = "Listahechizos.php"><img src = "img/3.jpg" alt = "Slide 3" /></a>
                        </div>
                        <div class = "item-slide">
                        <a href = "creapersonaje.php"><img src = "img/4.jpg" alt = "Slide 4" /></a>
                        </div>
                </div>
                <div class = "pagination">
                        <label class = "pag-item" for = "1">
                            <img src = "img/1.jpg" alt = "Slide 1" />
                        </label>
                        <label class = "pag-item" for = "2">
                            <img src = "img/2.jpg" alt = "Slide 2" />
                        </label>
                        <label class = "pag-item" for = "3">
                            <img src = "img/3.jpg" alt = "Slide 3" />
                        </label>
                        <label class = "pag-item" for = "4">
                            <img src = "img/4.jpg" alt = "Slide 4" />
                        </label>
                </div>
            </div>

            <div class = "texto">
                <p>
                    Esto es una pagina diseñada para ayudar a los jugadores y directores de juego de la llamada de Cthulhu
                    a la hora de organizar y dirigir las partidas en las que participan.
                </p>
                <a href = "https://www.chaosium.com/cthulhu-quickstart/"><img src = "img/quick-start-rules.png" alt = "quick-start rules" id = "qsr"/></a>
                <p> 
                    Si eres nuevo en esto te recomendaría ehcar un vistazo a las reglas rapidas de la llamada de Cthulhu
                    te permitiran hacerte una idea de como funciona el juego. <a href = "https://www.chaosium.com/cthulhu-quickstart/">Aquí</a> puedes
                    echarles un vistazo en la página oficial de Chaosium. 
                </p>
            </div>
        </div>
        <footer id = "footer"><p>DATA</p></footer>
    </div>
</body>
</html>