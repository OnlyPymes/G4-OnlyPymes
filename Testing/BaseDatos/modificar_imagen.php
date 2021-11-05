<?php
include('conexion_mysql.php');

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$imagen = file_get_contents($_FILES['imagen']['tmp_name']);




$sql = "UPDATE tabla_imagenes_prueba SET IMG_NOMBRE=?, IMG_IMAGEN=? WHERE IMG_ID=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$nombre, $imagen, $id]);


header("Location: ../paginasWeb/mostrar_imagenes.php");
exit;


 ?>
