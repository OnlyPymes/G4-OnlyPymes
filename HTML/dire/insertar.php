<?php 


    include 'model/conexion.php';
    $iddire = $_POST['txtIdDire'];
    $nomdire = $_POST['txtDire'];
    $idcity = $_POST['txtIdCity'];
    $iduser = $_POST['txtIdUser'];

    $sentencia = $bd->prepare("INSERT INTO direccion(Id_Direccion,Nombre_Direccion,id_ciudad,id_usuario) VALUES (?,?,?,?)");

    $resultado = $sentencia ->execute([$iddire,$nomdire,$idcity,$iduser]);

    if ($resultado === TRUE ){
    	header('Location: index.php');
    }else{
    	echo "Error";
    }
 ?>