<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body >

    <center>
        <form method="post" enctype="multipart/form-data">
          <input type="text" required name="nombre" placeholder="Nombre.... "value=""><br><br>
          <input type="file" required name="imagen"><br><br>
          <input type="submit" name="aceptar" value="Aceptar">
        </form>
        <?php
          include('../BaseDatos/subida_imagenes.php');
         ?>

         <br><br>
         <a href="mostrar_imagenes.php">Mostrar</a>

    </center>

  </body>
</html>
