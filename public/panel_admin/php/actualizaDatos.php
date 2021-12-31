<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$r=$_POST['representante'];
	$ru=$_POST['rubro'];

	$sql="UPDATE pym set nombre='$n',representante='$r',rubro='$ru' where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>