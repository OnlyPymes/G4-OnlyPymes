
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from pyme where id_pyme='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>