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
        <!-- NUevo -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
        <!--  -->
    </head>
    <body>
    <!-- action="sesionusuario.php" method="POST" -->
        <form class="formulario" name = "formulario" >
            <header>
                <img src = "../HTML/Imagenes/WhatsApp Image 2021-12-22 at 18.53.34.jpeg" class="logo-container">
            </header>
            <div class = "etiqueta">
                <label class="etiquetaNombre">Usuario:</label>
            </div>
            <input  type="text" class="inputs" placeholder = "Ingrese nombre de usuario" name = "Usuario" id="usuario" required>
            <br>
            <div class = "e2">
                <label>Contraseña:</label>
            </div>    
            <input class="inputs" type="password" placeholder="Ingrese Contraseña" name = "Contraseña" id="contraseña" required>
            <br>
            <div class = boton>
                <!-- type="submit" onclick = 'vallog()'-->
                <button name="btn" id="btn_login" type="button" class="botoniniciar" >Iniciar sesión</button>
            </div>
            <br>
            <a class="link" href="registrousuario.php">¿No tiene cuenta?  <br> Registrarse</a>
        </form>
        <!-- src="./VLogin.js" -->
        <script>
         $('#btn_login').click(function (){

            var name = document.getElementById('usuario').value;
            var pass = document.getElementById('contraseña').value;

            var ruta = "name="+name+"&pass="+pass;

            $.ajax({
                url : 'sesionusuario.php',
                type:  'POST',
                data: ruta,
            }).done(function(res) {
                if(res==="aceptado"){
                    window.location.href = "../index_registrado.php";
                }else{
                    console.log(res);
                }             
            })
            .fail(function() {
                alert( "error" );
            })
            // .always(function() {
            //     alert( "complete" );
            // });
        });     







        </script>

    </body>
</html>