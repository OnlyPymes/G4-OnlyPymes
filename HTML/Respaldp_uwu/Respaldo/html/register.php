<?php
Include('conexion.php');
?>
<!--aprender a ordenar los archivos del código-->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="descripcion" content="Registrate en OnlyPymes" />
  <link rel="stylesheet" href="../css/Styleregister.css">
  <link rel="icon" href="../logo/Only.png"/>
  <script src="https://kit.fontawesome.com/be8c81ece6.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</head>

<body>
  <div class="form-container">
    <form id="formulario" action="prueba.php" method="POST">
      <div class="label-container">
        <img class="logo1" src="../logo/logo1.0.png">
      </div>

      <div class="mb-3 mt-3">
        <label for="usr" class="form-label">Rut:</label>
        <div class="input-contenedor">
          <input required name="rut" type="text" class="form-control" id="usuario" placeholder="Ingrese el rut de su pyme">
        </div>

      </div>
      <div class="mb-3 mt-3">
        <label for="usr" class="form-label">Nombre de la Pyme:</label>
        <div class="input-contenedor">
          <input required name="nombre" type="text" class="form-control" id="nombrepyme" placeholder="Ingrese el nombre de su pyme">
        </div>

      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <div class="input-contenedor">
          <input required name="pass" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>

      </div>
      <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <div class="input-contenedor">
          <input  required name="email" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

      </div>
      <div class="mb-3 mt-3">
        <label for="usr" class="form-label">Ingrese su numero telefónico:</label>
        <div class="input-contenedor">
          <input required name="numero" type="text" class="form-control" id="numerotelefono" placeholder="Ingrese su número telefónico">
        </div>

      </div>



      <div class="mb-3 mt-3">

        <div class="input-contenedor">
          <label>Seleccione su ciudad</label>
          <select class="custom-select" id="seleccionar" name="seleccionar">
            <option value="0">Despliegue el menú</option>
           <!-- <option value="1">Santiago</option>
            <option value="2">Valparaíso</option>
            <option value="3">Concepción</option>
            <option value="4">La serena</option>
            <option value="5">Antofagasta</option>
            <option value="6">Iquique</option>
            <option value="7">Rancagua</option>
            <option value="8">Temuco</option>
            <option value="9">Talca</option>
            <option value="10">Arica</option>
            <option value="11">Puerto Montt</option>
            <option value="12">Chillán</option>
            <option value="13">Calama</option>
            <option value="14">Quillota</option>
            <option value="15">Osorno</option>-->
            <?php
            $query= $con ->query ("SELECT nombre_ciudad, id_ciudad FROM Ciudad");
            while($columna = mysqli_fetch_array($query))
            {
              $nombre = $columna['nombre_ciudad'];
              $id=$columna['id_ciudad'];
              echo "<option value='$id'>$nombre</option>";
            }
            ?>
          </select>
        </div>

      </div>

      <button type="submit" class="btn btn-primary"   >Registrarse</button>
    </form>
  </div>


</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="validacionesRegister.js"></script>
</html>