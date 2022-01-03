<?php
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$config = include 'config.php';

$resultado = [
  'error' => false,
  'mensaje' => ''
];

if (!isset($_GET['id_producto'])) {
  $resultado['error'] = true;
  $resultado['mensaje'] = 'El producto no existe';
}

if (isset($_POST['submit'])) {
  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $producto = [
      "id_producto"        => $_GET['id_producto'],
      "id_categoria"    => $_POST['id_categoria'],
      "nombre_producto"  => $_POST['nombre_producto'],
      "modelo_producto"     => $_POST['modelo_producto'],
      "id_unidad_medida"      => $_POST['id_unidad_medida'],
      "precio_producto"      => $_POST['precio_producto'],
      "id_inventario"      => $_POST['id_inventario'],
      "id_descuento"      => $_POST['id_descuento'],
      "id_pyme"      => $_POST['id_pyme']
      
    ];
    
    $consultaSQL = "UPDATE producto SET
        id_categoria = :id_categoria,
        nombre_producto = :nombre_producto,
        modelo_producto = :modelo_producto,
        id_unidad_medida = :id_unidad_medida,
        precio_producto = :precio_producto,
        id_inventario = :id_inventario,
        id_descuento = :id_descuento,
        id_pyme = :id_pyme
        
        WHERE id_producto = :id_producto";
    $consulta = $conexion->prepare($consultaSQL);
    $consulta->execute($producto);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}

try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
    
  $id_producto = $_GET['id_producto'];
  $consultaSQL = "SELECT * FROM producto WHERE id_producto =" . $id_producto;

  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute();

  $producto = $sentencia->fetch(PDO::FETCH_ASSOC);

  if (!$producto) {
    $resultado['error'] = true;
    $resultado['mensaje'] = 'No se ha encontrado el producto';
  }

} catch(PDOException $error) {
  $resultado['error'] = true;
  $resultado['mensaje'] = $error->getMessage();
}
?>

<?php require "header.php"; ?>

<?php
if ($resultado['error']) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php
if (isset($_POST['submit']) && !$resultado['error']) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert">
          El producto ha sido actualizado correctamente
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>
<?php
if (isset($producto) && $producto) {
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mt-4">Editar <?= escapar($producto['id_categoria']) . ' ' . escapar($producto['nombre_producto'])  ?></h2>
        <hr>
        <form method="post">
          <div class="form-group">
            <label for="id_categoria">id_categoria</label>
            <input type="text" name="id_categoria" id="id_categoria" value="<?= escapar($producto['id_categoria']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre_producto">nombre_producto</label>
            <input type="text" name="nombre_producto" id="nombre_producto" value="<?= escapar($producto['nombre_producto']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="modelo_producto">modelo_producto</label>
            <input type="text" name="modelo_producto" id="modelo_producto" value="<?= escapar($producto['modelo_producto']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="id_unidad_medida">id_unidad_medida</label>
            <input type="text" name="id_unidad_medida" id="id_unidad_medida" value="<?= escapar($producto['id_unidad_medida']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="precio_producto">precio_producto</label>
            <input type="text" name="precio_producto" id="precio_producto" value="<?= escapar($producto['precio_producto']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="id_inventario">id_inventario</label>
            <input type="text" name="id_inventario" id="id_inventario" value="<?= escapar($producto['id_inventario']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="id_descuento">id_descuento</label>
            <input type="text" name="id_descuento" id="id_descuento" value="<?= escapar($producto['id_descuento']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="id_pyme">id_pyme</label>
            <input type="text" name="id_pyme" id="id_pyme" value="<?= escapar($producto['id_pyme']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Confirmar Edicion">
            <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php require "footer.php"; ?>