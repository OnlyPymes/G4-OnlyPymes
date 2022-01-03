<?php
Include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="descripcion" content="Logeate en OnlyPymes"/>
        <link rel="stylesheet" href="../css/Stylelogin.css">

    </head>
    <body>

        <form class="formulario" name = "formulario" action="sesionusuario.php" method="POST">
            <header>
                <img src = "../HTML/Imagenes/WhatsApp Image 2021-12-22 at 18.53.34.jpeg" class="logo-container">
            </header>
            <div class = "etiqueta">
                <label class="etiquetaNombre">Usuario:</label>
            </div>
            <input type="text" class="inputs" placeholder = "Ingrese nombre de usuario" name = "Usuario" id="Usuario">
            <br>
            <div class = "e2">
                <label>Contraseña:</label>
            </div>    
            <input class="inputs" type="password" placeholder="Ingrese Contraseña" name = "Contraseña" id="Contraseña">
            <br>
            <div class = boton>
                <button name="btn" id="btn" type="submit" class="botoniniciar" onclick = 'vallog()'>Iniciar sesión</button>
            </div>
            
            <br>
            <a class="link" href="registrousuario.php">¿No tiene cuenta?  <br> Registrarse</a>
        </form>
        <script src="./VLogin.js"></script>

    </body>
</html>