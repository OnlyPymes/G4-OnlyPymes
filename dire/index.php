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
			<tr class= "tabla">
				<td class="dato_tabla">ID Direccion</td>
				<td class="dato_tabla">Direccion</td>
				<td class="dato_tabla">ID Ciudad</td>
				<td class="dato_tabla">ID Usuario</td>
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
				        <td><a class="eliminar" href="eliminar.php?id=<?php echo $dato->Id_Direccion; ?>">Eliminar</a></td>
			    	</tr>
			    	<?php
			    }
			?>
		</table >
		<h3>Ingresar direccion:</h3>
		<form method="POST" class="form-register" action= "insertar.php">
			<table>
				<tr>
					<td><p>Direccion:</p></td>
					<td><input type="text" name="txtDire" required=""></td>
				</tr>
				<tr>
					<td><p>ID Ciudad:</p></td>
					<td><input type="number" name="txtIdCity" required=""></td>
				</tr>
				<tr>
					<td><p>ID Usuario:</p></td>
					<td><input type="number" name="txtIdUser" required=""></td>
				</tr>
				<tr>
					<td><input class="submit" type="reset" name=""> </td>
					<td><input class="submit" type="submit" name="submit "value="Ingresar Direccion"></td>
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