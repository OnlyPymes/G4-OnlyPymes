<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre_pyme'];
	$r=$_POST['email'];
	$ru=$_POST['telefono_pyme'];

	$sql="INSERT into pyme (nombre_pyme,email,telefono_pyme,id_validacion)
								values ('$n','$r','$ru','0')";
	echo $result=mysqli_query($conexion,$sql);

/*

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$r=$_POST['representante'];
	$ru=$_POST['rubro'];

	$sql="INSERT into pym (nombre,representante,rubro,id)
								values ('$n','$r','$ru','0')";
	echo $result=mysqli_query($conexion,$sql);
*/

?>