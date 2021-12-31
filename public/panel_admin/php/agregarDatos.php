<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$r=$_POST['representante'];
	$ru=$_POST['rubro'];

	$sql="INSERT into pym (nombre,representante,rubro,estado)
								values ('$n','$r','$ru','0')";
	echo $result=mysqli_query($conexion,$sql);

 ?>