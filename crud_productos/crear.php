<?php

include 'funciones.php';

$config = include 'config.php';

$dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
$conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

//if(!$conexion){echo'no conectoooooo';}
//else{echo'SI conectoooooo';}



csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'El producto ' . escapar($_POST['nombre_producto']) . ' ha sido agregado con éxito'
  ];


  try {


    $producto = [
      "id_categoria"   => $_POST['id_categoria'],
      "nombre_producto" => $_POST['nombre_producto'],
      "modelo_producto" => $_POST['modelo_producto'],
      "id_unidad_medida" => $_POST['id_unidad_medida'],
      "precio_producto" => $_POST['precio_producto'],
      "id_inventario" => $_POST['id_inventario'],
      "id_descuento" => $_POST['id_descuento'],
      "id_pyme" => $_POST['id_pyme'],
    ];

    $consultaSQL = "INSERT INTO producto2 (id_categoria,nombre_producto,modelo_producto,id_unidad_medida,precio_producto,id_inventario,id_descuento,id_pyme)";
    $consultaSQL .= "values (:" . implode(", :", array_keys($producto)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute($producto);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
?>

<?php include 'header.php'; ?>

<?php
if (isset($resultado)) {
  ?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un producto</h2>
      <hr>
      <form method="post">

        <div class="form-group">
              <select class="custom-select" id="id_categoria" name="id_categoria">
                  <?php
                  echo'<option value="0">Seleccione categoria</option> ' ; 
                  $querypdo=$conexion->prepare("SELECT `id_categoria`,`nombre_categoria` FROM `Categoria`");
                  $querypdo->execute();
                  $data=$querypdo->fetchAll();

                 foreach($data as $valores):
                 
                  echo'<option value="'.$valores[id_categoria].'">'.$valores[nombre_categoria].'</option> ';
                  endforeach;
                  ?>
              </select>
        </div>
        <div class="form-group">
          <label for="nombre_producto">nombre_producto</label>
          <input type="text" name="nombre_producto" id="nombre_producto" class="form-control required">
        </div>
        <div class="form-group">
          <label for="modelo_producto">modelo_producto</label>
          <input type="text" name="modelo_producto" id="modelo_producto" class="form-control required">
        </div>
        <div class="form-group">
          <label for="id_unidad_medida">id_unidad_medida</label>
          <input type="text" name="id_unidad_medida" id="id_unidad_medida" class="form-control required">
        </div>
        <div class="form-group">
          <label for="precio_producto">precio_producto</label>
          <input type="text" name="precio_producto" id="precio_producto" class="form-control required">
        </div>
        <div class="form-group">
        <select class="custom-select" id="id_descuento" name="id_descuento">
                  <?php
                  echo'<option value="0">Seleccione descuento</option> ' ; 
                  $querypdo=$conexion->prepare("SELECT `id_descuento`,`descripcion_descuento` FROM `Descuento`");
                  $querypdo->execute();
                  $data=$querypdo->fetchAll();

                 foreach($data as $valores):
                 
                  echo'<option value="'.$valores[id_descuento].'">'.$valores[descripcion_descuento].'</option> ';
                  endforeach;
                  ?>
              </select>
        </div>
        <div class="form-group">
        <select class="custom-select" id="id_inventario" name="id_inventario">
                  <?php
                  echo'<option value="0">Seleccione inventario</option> ' ; 
                  $querypdo=$conexion->prepare("SELECT `id_inventario`,`stock` FROM `inventario`");
                  $querypdo->execute();
                  $data=$querypdo->fetchAll();

                 foreach($data as $valores):
                 
                  echo'<option value="'.$valores[id_inventario].'">'.$valores[stock].'</option> ';
                  endforeach;
                  ?>
              </select>
        </div>
        <div class="form-group">
        <select class="custom-select" id="id_pyme" name="id_pyme">
                  <?php
                  echo'<option value="0">Seleccione pyme</option> ' ; 
                  $querypdo=$conexion->prepare("SELECT `id_pyme`,`nombre_pyme` FROM `pyme`");
                  $querypdo->execute();
                  $data=$querypdo->fetchAll();

                 foreach($data as $valores):
                 
                  echo'<option value="'.$valores[id_pyme].'">'.$valores[nombre_pyme].'</option> ';
                  endforeach;
                  ?>
              </select>
        </div>
        <div class="form-group">
          <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
          <input type="submit" name="submit" class="btn btn-primary" value="Registrar">
          <a class="btn btn-primary" href="index.php">Regresar</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>