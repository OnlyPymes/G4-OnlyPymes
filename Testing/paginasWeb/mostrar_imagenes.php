
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <table border="2">
        <thead>
          <tr>
            <th colspan="5"> <a href="formulario_imagenes.php">Nuevo</a> </th>
          </tr>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th colspan="2">Operaciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("../BaseDatos/conexion_mysql.php");

          $sql = "SELECT * FROM tabla_imagenes_prueba";
          $resultado= $conn->prepare($sql);
          $resultado->execute();

          while($row = $resultado->fetch()){



           ?>
           <tr>
             <td><?php echo $row['IMG_ID']; ?></td>
             <td><?php echo $row['IMG_NOMBRE']; ?></td>
             <td> <?php echo '<img height="100px" width="100px" src="data:image;base64,'.base64_encode( $row['IMG_IMAGEN'] ).'" />'; ?> </td>
             <th> <a href="formulario_modificar_imagen.php?id=<?php echo $row['IMG_ID'] ?>">Modificar</a> </th>
             <th> <a href="../BaseDatos/eliminar_imagen.php?id=<?php echo $row['IMG_ID'] ?>">Eliminar</a> </th>
           </tr>


           <?php
            }
           ?>




        </tbody>

      </table>

  </center>
  </body>
</html>
