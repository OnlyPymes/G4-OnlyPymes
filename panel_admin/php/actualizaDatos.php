<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre_pyme'];
	$r=$_POST['email'];
	$ru=$_POST['telefono_pyme'];

	$sql="UPDATE pyme set nombre_pyme='$n',email='$r',telefono_pyme='$ru' where id_pyme='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>