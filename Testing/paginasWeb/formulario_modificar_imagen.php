<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Modificar Imagenes</title>
    <link rel="stylesheet" href="../estilos/formulario_img.css">
    <link  rel="icon"   href="../icon/Only.png"/>
  </head>
  <body >
    <a href="../index.php"><img class="icon" src="../icon/Only.png" width="95" height="auto"></a>
    <?php
    include("../BaseDatos/conexion_mysql.php");


    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM tabla_imagenes_prueba WHERE IMG_ID=$id";
    $resultado= $conn->prepare($sql);
    $resultado->execute();
    $row = $resultado->fetch();





     ?>
  <div class="tabla">
    <center>
        <form method="post" enctype="multipart/form-data" action="../BaseDatos/modificar_imagen.php?id=<?php echo $row['IMG_ID']  ?>">
          <input type="text" required name="nombre" placeholder="Nombre.... "value="<?php echo $row['IMG_NOMBRE'] ?>"><br><br>
          <?php echo '<img height="100px" width="100px" src="data:image;base64,'.base64_encode( $row['IMG_IMAGEN'] ).'" />'; ?><br><br>
          <input type="file" required name="imagen"><br><br>
          <input type="submit" name="aceptar" value="Aceptar">
        </form>


         <br><br>
         <a href="mostrar_imagenes.php" class="Boton">Mostrar</a>

    </center>
  </div>

  </body>
</html>
