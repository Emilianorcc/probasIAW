<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel = "stylesheet" type = "text/css" href = "css/login.css">
    <link rel = "stylesheet" type = "text/css" href = "css/header.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css">
    <title>Login</title>
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
                </ul>
            </div>
        </div>
        <div class = "container">
            <div class = "decoracion">
                <img src = "img/decoration.png" id = "l">
                <img src = "img/decoration.png" id = "r">
            </div>
            <div class = "login">
                <form action = "/action_page.php">
                    <fieldset>
                        <legend>Login</legend>
                        <label for = "nombrelogin">Nombre de usuario/Email</label></br>
                        <input type = "text" id = "nombrelogin" name = "nombrelogin" value = "Cultista@gmail.com"></br></br>
                        <label for = "password">Contraseña</label></br>
                        <input type = "text" id = "password" name = "password"></br></br>
                        <input type = "submit" value = "Submit">
                        <p>Recuperar contraseña</p>
                        <p><a href = "register.php">Registrarse</a></p>
                    </fieldset>
                </form>
            </div>
        </div>
        <footer id = "footer"><p>DATA</p></footer>
    </div>
</body>
</html>