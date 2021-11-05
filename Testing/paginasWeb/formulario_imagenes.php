<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Imagenes</title>
    <link rel="stylesheet" href="../estilos/formulario_img.css">
    <link  rel="icon"   href="../icon/Only.png"/>
  </head>
  <body >
<a href="../index.php"><img class="icon" src="../icon/Only.png" width="95" height="auto"></a>
  <div class="tabla">
    <center>
        <form method="post" enctype="multipart/form-data">
          <input type="text" required name="nombre" placeholder="Nombre.... "value=""><br><br>
          <input type="file" accept="image/*" required name="imagen"><br><br>
          <input type="submit" name="aceptar" value="Aceptar">
        </form>
        <?php
          include('../BaseDatos/subida_imagenes.php');
         ?>

         <br><br>
         <a href="mostrar_imagenes.php" class="Boton">Mostrar</a>

    </center>
  </div>

  </body>
</html>
