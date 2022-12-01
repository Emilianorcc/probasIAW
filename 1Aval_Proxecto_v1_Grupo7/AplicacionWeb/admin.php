<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel = "stylesheet" type = "text/css" href = "css/header.css">
    <link rel = "stylesheet" type = "text/css" href = "css/admin.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css">
    <title>Administrador</title>
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
            <div class = "selecpartida">
                <h3>Seleccionar partida</h3>
                <form>
                    <label for = "partida">Partida</label>
                    <select name = "Partidas" id = "partidas">
                        <option value = "partida1">La casa Corbitt</option>
                        <option value = "partida2">El faro sin luz</option>
                    </select>
                </form>
            </div>
            <div class = "selecarchivo">
                    <p>Administrar archivos</p>
                    <table>
                        <tr>
                            <td>Archivo1</td>
                        </tr>
                        <tr>
                            <td>Archivo1</td>
                        </tr>
                    </table>
                <br/>
                <form>
                    <label for = "archivo">Subir archivo</label></br>
                    <input type = "file" name = "archivo"/>
                </form>
            </div>
            <div class = "selecpj">
                <p>Administrar personajes</p>
                <table>
                    <tr>
                        <td>Jhon Smith</td>
                    </tr>
                </table>
                <p><a href = "creapersonaje.php">Crear personajes nuevos</a></p>
            </div>
            <div class = "selecmonstruo">
                <p>Administrar monstruos</p>
                <table>
                    <tr>
                        <td><a href = "profundo.php">Profundo</a></td>
                    </tr>
                    <tr>
                        <td><a href = "profundo.php">Profundo</a></td>
                    </tr>
                </table>
                <p>Añadir nuevo monstruo</p>
            </div>
        </div>
        <footer id = "footer"><p>DATA</p></footer>
    </div>
</body>
</html>