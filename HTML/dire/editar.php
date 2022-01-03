<?php 
     if (!isset($_GET['id'])){
     	header('Location: index.php');
     }

     include 'model/conexion.php';
     $id = $_GET['id'];

     $consulta = $bd->prepare("SELECT * FROM direccion WHERE Id_Direccion = ?;");
     $consulta->execute([$id]);
     $direccion = $consulta->fetch(PDO::FETCH_OBJ);
     //print_r($direccion);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Editar Direccion</title>
 	<link rel="stylesheet" type="text/css" href="css/estilos2.css">
 </head>
 <body>
 	<center>
 		<h3 class="titulo">Editar Direccion:</h3>
 		<form method="POST" class="form-register" action="editarProceso.php">
 			<table>
 				<tr class="contenedor">
 					<td>Direccion: </td>
 					<td><input type="text" name="txt2Dire" value="<?php echo $direccion->Nombre_direccion?>"></td>
 				</tr>
 				<tr class="contenedor">
 					<td>ID Ciudad: </td>
 					<td><input type="text" name="txt2City" value="<?php echo $direccion->id_ciudad ?>"></td>
 				</tr>
 				<tr class="contenedor">
 					<td>ID Usuario: </td>
 					<td><input type="text" name="txt2User" value="<?php echo $direccion->id_usuario ?>"></td>
 				</tr>
 				<tr class="contenedor">
 					<input type="hidden" name="oculto">
 					<input type="hidden" name="id2" value="<?php echo $direccion->Id_Direccion; ?>">
 					<td colspan="2"><input type="submit" class="envio"value="Editar Direccion"> </td>
 				</tr>
 			</table>

 	    </form>
 	</center>
 
 </body>
 </html>