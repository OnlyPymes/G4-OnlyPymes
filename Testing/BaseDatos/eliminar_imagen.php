<?php
include('conexion_mysql.php');

$id = $_REQUEST['id'];




$sql = "DELETE FROM tabla_imagenes_prueba WHERE IMG_ID=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$id]);



header("Location: ../paginasWeb/mostrar_imagenes.php");
exit;


 ?>
