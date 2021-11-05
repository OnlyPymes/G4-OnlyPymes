<?php
include('conexion_mysql.php');

if(isset($_POST['aceptar'])){

    $nombre = $_POST['nombre'];
    $imagen = file_get_contents($_FILES['imagen']['tmp_name']);


    $sql = "INSERT INTO tabla_imagenes_prueba( IMG_NOMBRE, IMG_IMAGEN) VALUES (?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$nombre,$imagen]);


  header("Location: ../paginasWeb/mostrar_imagenes.php");
  exit;


}
?>
