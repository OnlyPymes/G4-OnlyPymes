<?php
Include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro usuario</title>
        <meta name="descripcion" content="Registrate en OnlyPymes"/>
        <link rel="stylesheet" href="../css/Styleregister.css">

    </head>
    
    <body>
        <form class = "registro" name = "registro" method = "POST" action="InsersionUsuario.php">
            <header>
                <img src = "./Imagenes/WhatsApp Image 2021-12-22 at 18.53.34.jpeg" class="logo-container">
            </header>
            <div class = "e1">
                <label class="eUsuario">Usuario:</label>
            </div>
            <br>
            <input type="text" class="inputs" placeholder = "Ingrese nombre de usuario" style = "text-align: center" name = "Usuario" id = "Usuario">
            <br>
            <br>
            <div class = "e2">
                <label class="etiquetaNombre">Contraseña:</label>
            </div>
            <br>
            <input class="inputs" type="password" placeholder="Ingrese Contraseña" style = "text-align: center" name = "Contraseña" id = "Contraseña">
            <br>
            <br>
            <div class = "e3">
                <label class="etiquetaNombre">Email:</label>
            </div>
            <br>
            <input type="email" class="inputs" placeholder = "Ingrese su Email" style = "text-align: center" name = "email" id = "email">
            <br>
            <br>
            <div class = "e4">
                <label class="etiquetaNombre">Telefono:</label>
            </div>
            <br>
            <input type="text" class="inputs" placeholder = "Ingrese su telefono" style = "text-align: center" name = "telefono" id = "telefono">
            <br>
            <br>
            
            <div class = boton>

                <button type="submit"  onclick = 'valreg()' class="botonregistrarse">Registrarse</button >
            </div>
            <br>
        </form>
        <script src="./Vregistrousuario.js"></script>
    </body>
</html>

