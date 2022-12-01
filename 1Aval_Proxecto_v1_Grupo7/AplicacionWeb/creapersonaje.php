<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel = "stylesheet" type = "text/css" href = "css/header.css">
    <link rel = "stylesheet" type = "text/css" href = "css/creapersonaje.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css">
    <title>Crear Investigador</title>
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
            <h1>CREACIÓN DE PERSONAJE</h1>
            <div>
                <form action = "/action_page.php">
                    <fieldset class = "formnombre">
                        <legend>Años 20</legend>
                        <label for = "nombrepj">Nombre
                            <input type = "text" id = "nombrepj" name = "nombrepj" value = "John Smith">
                        </label>
                        <label for = "nombrej">Jugador
                            <input type = "text" id = "nombrej" name = "nombrej">
                        </label>
                        <label for = "ocupacion">Ocupación
                            <input type = "text" id = "ocupacion" name = "ocupacion">
                        </label>
                        <label for = "genero">Género
                            <input type = "text" id = "genero" name = "genero">
                        </label>
                        <label for = "edad">Edad
                            <input type = "text" id = "edad" name = "edad">
                        </label>
                        <label for = "lugarn">Lugar de nacimiento
                            <input type = "text" id = "lugarn" name = "lugarn">
                        </label>
                        <label for = "lugarr">Lugar de residencia
                            <input type = "text" id = "lugarr" name = "lugarr">
                        </label>
                    </fieldset>
                </form>
            </div>
            <div>
                <form action = "/action_page.php"  class = "formstats">
                    <fieldset>
                        <legend>Características</legend>
                        <label for = "fuerza">FUE
                            <input type = "number" id = "fuerza" name = "fuerza">
                        </label>
                        <label for = "const">CON
                            <input type = "number" id = "const" name = "const">
                        </label>  
                        <label for = "tam">TAM
                            <input type = "number" id = "tam" name = "tam">
                        </label> 
                        <label for = "des">DES
                            <input type = "number" id = "des" name = "des">
                        </label>        
                        <label for = "apa">APA
                            <input type = "number" id = "apa" name = "apa">
                        </label>    
                        <label for = "int">INT
                            <input type = "number" id = "int" name = "int">
                        </label>
                        <label for = "pod">POD
                            <input type = "number" id = "pod" name = "pod">
                        </label>
                        <label for = "edu">EDU
                            <input type = "number" id = "edu" name = "edu">
                        </label>      
                        <label for = "mov">MOV
                            <input type = "number" id = "mov" name = "mov">
                        </label>      
                    </fieldset>
                </form>
            </div>
            <div>
                <form class = "formpvpm">
                    <fieldset>
                        <legend>Puntos de vida y magia</legend>
                        <label for = "pv">Puntos de vida
                            <output type = "number" id = "pv" name = "pv">
                        </label>

                        <label for = "pm">Puntos de magia
                            <output type = "number" id = "pm" name = "pm">
                        </label>

                    </fieldset>
                </form>
            </div>
            <div>
                <form class = "formcordura">
                    <fieldset>
                        <legend>Cordura y suerte</legend>
                        <label for = "cordura">Cordura
                            <input type = "number" id = "cordura" name = "cordura">
                        </label>
                        <label for = "suerte">Suerte
                            <input type = "number" id = "suerte" name = "suerte">
                        </label>
                    </fieldset>
                </form>
            </div>
            <div>
                <form>
                    <fieldset class = "formhabilidad">
                        <legend>Habilidades del investigador</legend>                            
                        <label for = "antropologia">Antropología
                            <input type = "number" id = "antropologia" name = "antropologia" default = "1">
                        </label>
                        <label for = "armacorta">Arma corta
                            <input type = "number" id = "armacorta" name = "armacorta" default = "20">
                        </label>
                        <label for = "fusilescopeta">Fusil/Escopeta
                            <input type = "number" id = "fusilescopeta" name = "fusilescopeta" default = "25">
                        </label>    
                        <label for = "arqueologia">Arqueología
                            <input type = "number" id = "arqueologia" name = "arqueologia" default = "1">
                        </label>
                        <label for = "arteartesania">Arte/Artesanía
                            <input type = "number" id = "arteartesania" name = "arteartesania" default = "5">
                        </label>                             
                        <label for = "buscarlibros">Buscar libros
                            <input type = "number" id = "buscarlibros" name = "buscarlibros" default = "20">
                        </label>
                        <label for = "cerrajeria">Cerrajería
                            <input type = "number" id = "cerrajeria" name = "cerrajeria" default = "1">
                        </label>                            
                        <label for = "charlataneria">Charlatanería
                            <input type = "number" id = "charlataneria" name = "charlataneria" default = "5">
                        </label>
                        <label for = "ciencia">Ciencia
                            <input type = "number" id = "ciencia" name = "ciencia" default = "1">
                        </label>                            
                        <label for = "cienciasocultas">Ciencias Ocultas
                            <input type = "number" id = "cienciasocultas" name = "cienciasocultas" default = "5">
                        </label>
                        <label for = "pelea">Pelea
                            <input type = "number" id = "pelea" name = "pelea" default = "25">
                        </label>                            
                        <label for = "conducirautomovil">Conducir automóvil
                            <input type = "number" id = "conducirautomovil" name = "conducirautomovil" default = "20">
                        </label>
                        <label for = "conducirmaquinaria">Conducir maquinaria
                            <input type = "number" id = "conducirmaquinaria" name = "conducirmaquinaria" default = "1">
                        </label> 
                        <label for = "contabilidad">Contabilidad
                            <input type = "number" id = "contabilidad" name = "contabilidad" default = "5">
                        </label>
                        <label for = "credito">Crédito
                            <input type = "number" id = "credito" name = "credito" default = "0">
                        </label>                            
                        <label for = "derecho">Derecho
                            <input type = "number" id = "derecho" name = "derecho" default = "5">
                        </label>
                        <label for = "descubrir">Descubrir
                            <input type = "number" id = "descubrir" name = "descubrir" default = "25">
                        </label>                            
                        <label for = "disfrazarse">Disfrazarse
                            <input type = "number" id = "disfrazarse" name = "disfrazarse" default = "5">
                        </label>
                        <label for = "electricidad">Electricidad
                            <input type = "number" id = "electricidad" name = "electricidad" default = "10">
                        </label>                            
                        <label for = "encanto">Encanto
                            <input type = "number" id = "encanto" name = "encanto" default = "15">
                        </label>
                        <label for = "equitacion">Equitación
                            <input type = "number" id = "equitacion" name = "equitacion" default = "5">
                        </label>
                        <label for = "escuchar">Escuchar
                            <input type = "number" id = "escuchar" name = "escuchar" default = "20">
                        </label>
                        <label for = "esquivar">Esquivar
                            <input type = "number" id = "esquivar" name = "esquivar" default = "0">
                        </label> 
                        <label for = "historia">Historia
                            <input type = "number" id = "historia" name = "historia" default = "5">
                        </label>
                        <label for = "intimidar">Intimidar
                            <input type = "number" id = "intimidar" name = "intimidar" default = "15">
                        </label>    
                        <label for = "juegodemanos">Juego de manos
                            <input type = "number" id = "juegodemanos" name = "juegodemanos" default = "10">
                        </label>
                        <label for = "lanzar">Lanzar
                            <input type = "number" id = "lanzar" name = "lanzar" default = "20">
                        </label>                           
                        <label for = "mecanica">Mecánica
                            <input type = "number" id = "mecanica" name = "mecanica" default = "10">
                        </label>
                        <label for = "medicina">Medicina
                            <input type = "number" id = "medicina" name = "medicina" default = "1">
                        </label>                           
                        <label for = "nadar">Nadar
                            <input type = "number" id = "nadar" name = "nadar" default = "20">
                        </label>
                        <label for = "naturaleza">Naturaleza
                            <input type = "number" id = "naturaleza" name = "naturaleza" default = "10">
                        </label>                           
                        <label for = "orientarse">Orientarse
                            <input type = "number" id = "orientarse" name = "orientarse" default = "10">
                        </label>
                        <label for = "persuasion">Persuasión
                            <input type = "number" id = "persuasion" name = "persuasion" default = "10">
                        </label>                            
                        <label for = "pilotar">Pilotar
                            <input type = "number" id = "pilotar" name = "pilotar" default = "1">
                        </label>
                        <label for = "primerosauxilios">Primeros auxilios
                            <input type = "number" id = "primerosauxilios" name = "primerosauxilios" default = "30">
                        </label>
                        <label for = "psicoanalisis">Psicoanálisis
                            <input type = "number" id = "psicoanalisis" name = "psicoanalisis" default = "1">
                        </label>
                        <label for = "priscologia">Psicología
                            <input type = "number" id = "priscologia" name = "priscologia" default = "10">
                        </label> 
                        <label for = "saltar">Saltar
                            <input type = "number" id = "saltar" name = "saltar" default = "20">
                        </label>
                        <label for = "seguirrastros">Seguir rastros
                            <input type = "number" id = "seguirrastros" name = "seguirrastros" default = "10">
                        </label>                              
                        <label for = "sigilo">Sigilo
                            <input type = "number" id = "sigilo" name = "sigilo" default = "20">
                        </label>
                        <label for = "supervivencia">Supervivencia
                            <input type = "number" id = "supervivencia" name = "supervivencia" default = "10">
                        </label>
                        <label for = "tasacion">Tasación
                            <input type = "number" id = "tasacion" name = "tasacion" default = "5">
                        </label>
                        <label for = "trepar">Trepar
                            <input type = "number" id = "trepar" name = "trepar" default = "20">
                        </label>  
                            <input type = "submit" value = "Submit">    
                    </fieldset>
                </form>
            </div>
        </div>
        <footer id = "footer"><p>DATA</p></footer>
    </div>
</body>
</html>