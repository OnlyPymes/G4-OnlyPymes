<?php 
    include 'model/conexion.php';
    $consulta = $bd->query("SELECT * FROM direccion");
    $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
    //print_r($alumnos);

    if(isset($_POST['submit'])){
    	$nomdire = $_POST['txtDire'];
        $idcity = $_POST['txtIdCity'];
        $iduser = $_POST['txtIdUser'];
    }



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestión de Productos</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"">
</head>
<body>
	<center>
		<h3>Direcciones ingresadas:</h3>
		<table class="form-register">
			<tr>
				<td>ID Direccion</td>
				<td>Direccion</td>
				<td>ID Ciudad</td>
				<td>ID Usuario</td>
			</tr>

			<?php 
			    foreach ($resultado as $dato){
			    	?>
			    	<tr>
			    		<td><?php echo $dato->Id_Direccion; ?></td>
				        <td><?php echo $dato->Nombre_direccion; ?></td>
				        <td><?php echo $dato->id_ciudad; ?></td>
				        <td><?php echo $dato->id_usuario; ?></td>
				        <td><a href="editar.php?id=<?php echo $dato->Id_Direccion; ?>">Editar</a></td>
				        <td><a href="eliminar.php?id=<?php echo $dato->Id_Direccion; ?>">Eliminar</a></td>
			    	</tr>
			    	<?php
			    }
			?>
		</table >
		<h3>Ingresar direccion:</h3>
		<form method="POST" class="form-register" action= "insertar.php">
			<table>
				<tr>
					<td>Direccion: </td>
					<td><input type="text" name="txtDire" required=""></td>
				</tr>
				<tr>
					<td>Id Ciudad: </td>
					<td><input type="text" name="txtIdCity" required=""></td>
				</tr>
				<tr>
					<td>Id Usuario: </td>
					<td><input type="text" name="txtIdUser" required=""></td>
				</tr>
				<tr>
					<td><input type="reset" name=""> </td>
					<td><input type="submit" name="submit "value="Ingresar Direccion"></td>
				</tr>
				<?php 
				include("validacion.php");

				 ?>


			</table>
		 </form>
		<hr>
	</center>
</body>
</html>