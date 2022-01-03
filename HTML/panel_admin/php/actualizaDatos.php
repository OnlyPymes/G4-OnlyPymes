<?php 
/*
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$r=$_POST['representante'];
	$ru=$_POST['rubro'];

	$sql="UPDATE pym set nombre='$n',representante='$r',rubro='$ru' where id='$id'";
	echo $result=mysqli_query($conexion,$sql);
*/
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id_pyme'];
	$n=$_POST['nombre_pyme'];
	$r=$_POST['email'];
	$ru=$_POST['telefono_pyme'];

	$sql="UPDATE pyme set nombre_pyme='$n',email='$r',telefono_pyme='$ru' where id_pyme='$id'";
	echo $result=mysqli_query($conexion,$sql);

?>