<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre_pyme'];
	$r=$_POST['email'];
	$ru=$_POST['telefono_pyme'];

	$sql="INSERT into pym (nombre_pyme,email,telefono_pyme,estado)
								values ('$n','$r','$ru','0')";
	echo $result=mysqli_query($conexion,$sql);

 ?>