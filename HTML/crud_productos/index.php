<?php
include 'funciones.php';
include 'config.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$error = false;
$config = include 'config.php';

try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

  if (isset($_POST['id_categoria'])) {
    $consultaSQL = "SELECT * FROM producto WHERE id_categoria LIKE '%" . $_POST['id_categoria'] . "%'";
  } else {
    $consultaSQL = "SELECT * FROM producto";
  }

  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute();

  $producto = $sentencia->fetchAll();

} catch(PDOException $error) {
  $error= $error->getMessage();
}

$titulo = isset($_POST['id_categoria']) ? 'Lista de productos (' . $_POST['id_categoria'] . ')' : 'Lista de productos';
?>

<?php include "header.php"; ?>

<?php
if ($error) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
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
      <a href="crear.php"  class="btn btn-primary mt-4">Agregar productos</a>
      <hr>
      <form method="post" class="form-inline">
        <div class="form-group mr-3">
          <input type="text" id="id_categoria" name="id_categoria" placeholder="Buscar por id categoria" class="form-control">
        </div>
        <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
        <button type="submit" name="submit" class="btn btn-primary">Buscar</button>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-3"><?= $titulo ?></h2>
      <table class="table">
        <thead>
          <tr>
            <th>id_producto</th>
            <th>id_categoria</th>
            <th>nombre_producto</th>
            <th>modelo_producto</th>
            <th>id_unidad_medida</th>
            <th>precio_producto</th>
            <th>id_inventario</th>
            <th>id_descuento</th>
            <th>id_pyme</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($producto && $sentencia->rowCount() > 0) {
            foreach ($producto as $fila) {
              ?>
              <tr>
                <td><?php echo escapar($fila["id_producto"]); ?></td>
                <td><?php echo escapar($fila["id_categoria"]); ?></td>
                <td><?php echo escapar($fila["nombre_producto"]); ?></td>
                <td><?php echo escapar($fila["modelo_producto"]); ?></td>
                <td><?php echo escapar($fila["id_unidad_medida"]); ?></td>
                <td><?php echo escapar($fila["precio_producto"]); ?></td>
                <td><?php echo escapar($fila["id_inventario"]); ?></td>
                <td><?php echo escapar($fila["id_descuento"]); ?></td>
                <td><?php echo escapar($fila["id_pyme"]); ?></td>

                <td>
               
                  <a onclick="return confirm('¿Esta seguro que desea eliminar?');" href="<?= 'borrar.php?id_producto=' . escapar($fila["id_producto"]) ?>">🗑️Borrar</a>
                  <a href="<?= 'editar.php?id_producto=' . escapar($fila["id_producto"]) ?>">✏️Editar</a>
                </td>
              </tr>
              <?php
            }
          }
          ?>
        <tbody>
      </table>
    </div>
  </div>
</div>
<a class="btn btn-primary" href="../index.php">Regresar al inicio</a>
<?php include "footer.php"; ?>