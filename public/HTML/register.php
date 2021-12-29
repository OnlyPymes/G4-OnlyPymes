<?php
Include('conexion.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="descripcion" content="Registrate en OnlyPymes" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style-register.css">
    
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
  </head>
  <body class="body-style">
    <form  class="formulario" name="formulario" id="formulario" action="RegistroDatos.php" method="POST" >
        <header >
            <img src="./Imagenes/WhatsApp Image 2021-12-22 at 18.53.34.jpeg" class="logo-container">
        </header>
        <div class="mb-3 mt-3">
          <label for="rut" class="form-label">Rut:</label>
          <input type="text" class="form-control" id="rut" placeholder="11111111-1" name="rut">
        </div>
        <div class="mb-3">
          <label for="npyme" class="form-label">Nombre de la Pyme:</label>
          <input  type="text" class="form-control" id="npyme" placeholder="Ingrese el nombre de su Pyme" name="npyme">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Contraseña:</label>
            <input  type="password" class="form-control" id="pwd" placeholder="Ingrese Contraseña" name="pwd">
          </div>
        
        </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <div class="input-contenedor">
              <input type="email" class="form-control" id="email" placeholder="ingrese su email" name="email">
            </div>
    
          </div>
          <div class="mb-3 mt-3">
            <label for="usr" class="form-label">Ingrese su numero telefónico:</label>
            <div class="input-contenedor">
              <input  type="text" class="form-control" id="numerotelefono" placeholder="Ingrese su número telefónico" name="numero">
            </div>
    
          </div>
    
          <div class="mb-3 mt-3">
    
              <div class="input-contenedor">
              <label>Seleccione su ciudad</label>
              <select class="custom-select" id="seleccionar" name="seleccionar">
                <option value="0">Seleccione ciudad</option>   <!-- averiguar que no seleccione esto -->
                <!--<option value="1">Santiago</option>
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
        <button id="btn" type="submit" class="btn btn-primary" href="#" onclick='mostrarValores()'>Registrarse</button>
      </form>

    <!-- Optional JavaScript; choose one of the two! -->
   
    <script src="../js-register-sesion/ValidacionRegistroPyme.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
   
   
    
  </body>
</html>